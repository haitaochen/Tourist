<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
        $this->display("register");
    }


    public function register(){
    	$username=I('post.username');
    	$truename=I('post.truename');		
		$psd=I('post.password');   
		$password=md5($psd);  
		$email=I('post.email'); 
		$phone=I('post.phone');
		$idnumber=I('post.idnumber');
		$sex=I('post.sex');
		$address=I('post.address');

		$data=array(
			'username' => $username,
			'truename' => $truename,
			'password' => $password,
			'email' => $email,
			'idnumber' => $idnumber,
			'sex' => $sex,
			'address' => $address,
			'phone' => $phone
			);

		$result=M('user')->add($data);

		$_SESSION['username']=$username;
		$this->redirect("Index/index");

    }


  //   public function repeatname(){
  //   	$username=I('post.user');	

		// $where['name']=$username;
		// $res=M('user')->where($where)->select();

		// if ($res) {
		// 	echo 2;
		// }
		// else
		// {
		// 	echo 1;
		// }
   // }

}









