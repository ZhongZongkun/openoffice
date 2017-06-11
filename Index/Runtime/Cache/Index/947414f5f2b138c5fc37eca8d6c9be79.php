<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>登录</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="" id="styleCss">
	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="__PUBLIC__/js/jquery-2.2.2.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="__PUBLIC__/css/index.css" />
	<script>

			window.onload = function() {
		        reSize();
		        window.onresize = throttle(reSize,300);
		    }

			function client() {
				if (window.innerwidth != null) {
					return {
						width:window.innerwidth,
						height:window.innerheigh
					}
				}
				else if (document.compatMode === "CSS1Compet") {
					return {
						width:document.documentElement.clientWidth,
						height:document.documentElement.clientHeight
					}
				}
				else {
					return {
						width:document.body.clientWidth,
						height:document.body.clientHeight
					}
				}
			}

			function throttle(fn,delay) {
				var timer = null;
				return function() {
					clearTimeout(timer);
					timer = setTimeout(fn,delay);
				}
			}
	

			function reSize() {
				var clientWidth = client().width;
				if (clientWidth < 1300) {
					document.body.style.background = " url('__PUBLIC__/images/bgg.png')";
					styleCss.href = "__PUBLIC__/css/1200px.css";
				}
				else {
					document.body.style.background = " url('__PUBLIC__/images/bgg.png')";
					styleCss.href = "__PUBLIC__/css/1920px.css";
				}
				console.log(client().width);
			}
	</script>
</head>
<body>
	<div class="box">
		<div class="login-box">
			<div class="login-in">
				<span><img src="__PUBLIC__/images/title.png"></span>
				<div class="input-box">
				<form action="<?php echo U('Admin/Login/login');?>" method="POST">
					<div class="form-group">
					    <label for="inputEmail3" class="col-xs-2 control-label user"><span></span></label>
					    <input type="text" class="form-control" name="username" id="inputEmail3" placeholder="User">
					</div>
					<div class="form-group">
					    <label for="inputPassword3" class="col-xs-2 control-label pass"><span></span></label>
					      <input type="password" name="password" class="form-control" id="inputPassword3" placeholder="Password">
					</div>
					<div class="btspc">
					  	 <input type="submit" class="btn btn-info" style="width:400px;" value="登陆">
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>