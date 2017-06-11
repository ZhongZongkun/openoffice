<?php
// 前台模块

class IndexAction extends Action {

	//首页展示登陆
    public function index(){
    	$this->redirect('Admin/User/index');
		//$this->display();
    }
     public function login(){
		$this->display();
    }




}