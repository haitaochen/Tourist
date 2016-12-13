<?php
namespace Home\Controller;
use Think\Controller;
class CompanyController extends Controller {
    public function index(){
    	
        $this->display("company");
    }

    public function goodway(){
    	$this->display("goodway");
    }


    public function project(){
    	$this->display("project");
    }
}