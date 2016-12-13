<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function users(){
        $this->display("users");
    }

    public function index(){
        $this->display("users");
    }

}