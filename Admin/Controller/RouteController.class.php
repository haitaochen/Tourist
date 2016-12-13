<?php
namespace Admin\Controller;
use Think\Controller;
class RouteController extends Controller {
    public function index(){


        $this->display("index");

    }

    public function getroutes(){

        
        $list=M('routes')->field(true)->select();
        $arrs="[";
        
         foreach($list as $list){
        
            # code...
            $arrs=$arrs."{";
            $arrs=$arrs."id : '".$list['id']."',";
            $arrs=$arrs."name : '".$list['name']."',";
            $arrs=$arrs."traveldesc : '".$list['traveldesc']."',";
            $arrs=$arrs."daynumber : '".$list['daynumber']."',";
            $arrs=$arrs."daytimes : '".$list['daytimes']."',";
            $arrs=$arrs."selectnumber : '".$list['selectnumber']."'},";
        //}
        }
        $arrs=$arrs."]";
        var_dump($arrs);
        
    }

    public function deleteroute(){
        $id=I('post.id');
        $where['id']=intval($id);
        $res=M('routes')->where($where)->delete();
        if ($res) {
            echo 1;
        }
        else{
            echo 2;
        }
    }

   
    public function news(){
        $this->display("new");
    }

    public function adds(){
		$upload = new \Think\Upload();// 实例化上传类
          
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->rootPath  =     './Public/routepic/'; // 设置附件上传根目录
        $upload->savePath  =     ''; // 设置附件上传（子）目录
        $upload->saveName  =        array('uniqid','');     //I('post.title'); 
        $upload->uploadReplace=true;        //如果存在同名文件是否覆盖
        $upload->autoSub=false;
                   // 上传文件 
        $info   =   $upload->upload();
               
        if(!$info) {// 上传错误提示错误信息
            echo $upload->getError();
        }else{// 上传成功
        	$routename=I('post.routename');
        	$image=$info[0]["savename"];
        	$traveldesc=I('post.routedesc');
        	$price=I('post.price');
        	$traffic=I('post.traffic');
        	$livedesc=I('post.livedesc');
        	$fooddesc=I('post.fooddesc');
        	$liveimg=$info[1]["savename"];
        	$kinds=I('post.kinds');
        	$daynumber=I('post.daynumber');
        	$daytimes=I('post.daytimes');
        	$updatetime=date('y-m-d H:i:s',time());


        	$data=array(
        		'name' => $routename,
        		'traveldesc' => $traveldesc,
        		'price' => $price,
        		'daynumber' => $daynumber,
        		'traffic' => $traffic,
        		'livedesc' => $livedesc,
        		'fooddesc' => $fooddesc,
        		'liveimg' => $liveimg,
        		'kinds' => $kinds,
        		'image' => $image,
        		'selectnumber' => 0,
        		'daytimes' => $daytimes,
        		'updatetime' => $updatetime
        		);

        	 $result=M('routes')->add($data);
        	 if ($result) {
  
        	 	$where['name']=$routename;
        	 	$list=M('routes')->field(true)->where($where)->select();
        	 	$routeid=$list[0]['id'];

        	 	$number=1;
        	 	while ($number) {
        	 		if (!I('post.daydesc_'.$number)) {
        	 			break;
        	 		}
        	 		$daynumber=$number;
        	 		$imgnumber=intval($number)+1;
        	 		$travelimg=$info[$imgnumber]["savename"];
        	 		$traveldesc=I('post.daydesc_'.$number);
        	 		$number=$number+1;

        	 		$datas=array(
		        		'routeid' => $routeid,
		        		'daynumber' => $daynumber,
		        		'travelimg' => $travelimg,
		        		'traveldesc' => $traveldesc
		        		);
        	 		$results=M('schedule')->add($datas);
        	 		
        	 	}
        	 	$this->redirect("Route/index");
        	 }
        	 else{
        	 	echo "系统故障";
        	 }
        }
        

    }
}

