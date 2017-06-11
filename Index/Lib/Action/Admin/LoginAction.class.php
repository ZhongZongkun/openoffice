<?php 
/**
 * 后台登录控制器
 */
Class LoginAction extends Action{

	public function index(){
		$this->redirect('Index/Index/login');
	}

	//登录检测
	public function login(){
		if(!IS_POST) halt('页面不存在');
		$username = trim(I('username'));
		$pwd = I('password','','md5');
		$user = M('users')->where(array('username'=>$username))->find();
		if(!$user){
			$this->error('帐号不存在');
		}
		if($user['password'] != $pwd){
			$this->error('密码错误');
		}
		session('uid',$user['id']);
		session('username',$user['username']);
		session('level',$user['level']);
		session('master',$user['master']);
		if($_SESSION['level']==1){
			$this->success("登录成功",U('Admin/Index/index'));
		}
		if($_SESSION['level']==0){
			$this->success("登录成功",U('Admin/User/index'));
		}
	}

}


 ?>