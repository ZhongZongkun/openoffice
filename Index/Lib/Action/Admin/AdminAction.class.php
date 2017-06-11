<?php 
//判断是否登录模块
Class AdminAction extends Action{

	public function _initialize(){
		if(!isset($_SESSION['level']) ||!isset($_SESSION['username'])){
			$this->redirect('Index/Index/login');
		}else{
			if(($_SESSION['level'])!=1){
				$this->redirect('Index/Index/login');
			}
		}
	}

	//点击推出
	public function logout(){
		session_unset();
		session_destroy();
		$this->error("安全退出成功",U('Index/Index/login'));
	}


}


 ?>