<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display("index");
    }


    public function main(){
    	$this->display("main");
    }
    


}