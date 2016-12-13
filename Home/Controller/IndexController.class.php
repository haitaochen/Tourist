<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display("home");
    }



    public function login(){
    	$username=I('post.user');	
		$password=I('post.pasd');

		$where['name']=$username;
		$pasd=M('user')->where($where)->getField('password');

		if (md5($password)==$pasd) {
			$_SESSION['username']=$username;
			echo 1;
		}
		else
		{
			echo 2;
		}
    }


    public function Sessionuse(){
    	$_SESSION['username']=NULL;
    	$this->redirect("Index/index");
    }


}