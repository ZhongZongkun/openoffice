<?php 
//判断是否登录模块
Class CommonAction extends Action{

	public function _initialize(){
		if(!isset($_SESSION['level']) ||!isset($_SESSION['username'])){
			//$this->redirect('Admin/Login/index');
		}
	}

	//点击推出
	public function logout(){
		session_unset();
		session_destroy();
		$this->error("安全退出成功",U('Admin/Login/index'));
	}

}


 ?>