<?php 
//平板用户界面
class UserAction extends Action{
	//展示页面
	public function index(){

		$huiyi=M('huiyi')->order('time desc')->limit('1')->select();
		$data['huiyiid']=$huiyi[0]['id'];
		$yiti=M('yiti')->where($data)->order('xuhao')->select();
		$arr = explode('-', $huiyi[0]['huiyiname']);
		$this->assign('hui',$arr[0]);
		$this->assign('yi',$arr[1]);
		$this->assign('yiti',$yiti);
		$this->assign('huiyi',$huiyi[0]);
		$this->display();
	}
	//显示pdf的截图
	public function info(){
		$id=I('id');
		$re=M('yiti')->find($id);
		$data['yong']=1;
		$data['yitiid']=$id;
		$imgs=M('img')->where($data)->order('ord')->select();
		$imgdir=$re['imagedir'];
		$con=$re['imagecount'];
		for($i=0;$i<$con;$i++)
		{
			if($con==1){
				$imgarr[$i]['img']='__PUBLIC__/../uploads/'.$imgdir.'/pdf.png';
			}else{
				$imgarr[$i]['img']='__PUBLIC__/../uploads/'.$imgdir.'/pdf-'.$i.'.png';
			}
			
		}
		for($j=0;$j<count($imgs);$j++)
		{
			$arr = explode("/", $imgs[$j]['file']);
			$imgsarr[$j]['file']='__PUBLIC__/../uploads/'.$arr[2];
			$imgsarr[$j]['info']=$imgs[$j]['filename'];
		}
		$this->assign('imgarr',$imgarr);
		$this->assign('imgsarr',$imgsarr);
		//var_dump($imgarr);
		//die;
		$this->display();
	}
	//用户界面的议题展示
	public function user_yiti(){
		$id=I('id');
		$re=M('huiyi')->where(array('id'=>$id))->select();
		$yitis=M('yiti')->where(array('huiyiid'=>$id))->select();
		$ok=array_merge($re,$yitis);
		if($yitis==null){
			$ok=$re;
		}
		$this->ajaxreturn($ok);
	}

	//显示pdf页面
	public function pdf(){
		$this->display();
	}

	public function test()
	{
		$this->display();
	}


}


 ?>