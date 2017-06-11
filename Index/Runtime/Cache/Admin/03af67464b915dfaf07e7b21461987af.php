<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>meeting</title>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="" id="styleCss">
	<link rel="stylesheet" href="__PUBLIC__/css/index.css" />
	<style type="text/css">

</style>
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/scrollable.js"></script>
<script>
	window.onload = function() {
	    reSize();
	    window.onresize = throttle(reSize,300);
	}
	
	function client() {
		if (window.innerwidth != null) {
			return {
				width:window.innerwidth,
				height:window.innerHeigh
			}
		}
		else if (document.compatMode === "CSS1Compet") {
			return {
				width:document.documentElement.clientWidth,
				Height:document.documentElement.clientHeight
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
			document.body.style.backgroundColor = "#FFF";
			styleCss.href = "__PUBLIC__/css/1200px.css";
		}
		else {
			document.body.style.backgroundColor = "#FFF"
			styleCss.href = "__PUBLIC__/css/1920px.css";
		}
		console.log(client().width);
	}
	</script>
	<style type="text/css">
		html,body {
			width: 100%;
			height: 100%;
		}
		.list h1{
			width:330px;
			height: 40px;
			position: absolute;
			top: -100px;
			left: 50%;
			color: #ece8e8;
			font-weight: 600;
			letter-spacing: 20px;
			font-size: 60px;
			margin-left: -160px;
			font-family: 'MicrosoftYaHei'
		}
		.list {
			border-top: 5px solid #ddd;
			padding-top: 20px;
		}
		
		
		.list ul li {
			width: 100%;
			height: 60px;
			font-size: 40px;
			margin-top: 30px;
			padding-left: 30px;
			border-bottom: 1px solid #d0c6c6;
			background: url('__PUBLIC__/images/logo2.png') left center no-repeat;
		}
		.list ul li:hover{
			cursor: pointer;
			background-color: #ddd;
		}

		.list ul li span {
			float: right;
		}
	</style>
</head>
<body>
	<div class="bg-box"></div>
	<div class="list" style="width:100%; height:400px;  font-size:18px; margin:0 auto; position:relative; ">
		<h1>会议列表</h1>
		<ul>
			<li data-toggle="modal" data-target="#myModal">提议人提议提议人提议人议人提议人提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提提议人提议提议人提议人提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提提议人提议人提议提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提提议人提议人提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提议人提议人提议人提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提议人提议人提议人提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提议提议人提人议人提议人提议人</a><span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提议人提议人提议人提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提提议人提议人提议人提议人提议人<span>2016-05-7</span></li>
			<li data-toggle="modal" data-target="#myModal">提议人提议人提议人提议人提议人<span>2016-05-7</span></li>
		</ul>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
	        <h4 class="modal-title" id="myModalLabel">第12次会议的议题列表</h4>
	      </div>
	      <div class="modal-body">
	        	  <table class="table table-striped">
		       			<tr class="active">
							<td>序号</td>
							<td>提议人</td>
							<td>汇报单位</td>
							<td>汇报人</td>
							<td>列席单位</td>
							<td>列席人</td>
			       		</tr>
			       		
			       			<tr>
							<td><a href="<?php echo U('Admin/Index/pdf');?>" target="_blank">GHZF0sadasdas0001</a></td>
							
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
			       		
			       		
			       		<tr onclick="window.open('__PUBLIC__/pdf.html','_self')">
							<td>GHZF00001</td>
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
			       		<tr onclick="window.open('__PUBLIC__/pdf.html','_self')">
							<td>GHZF00001</td>
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
			       		<tr onclick="window.open('__PUBLIC__/pdf.html','_self')">
							<td>GHZF00001</td>
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
			       		<tr onclick="window.open('__PUBLIC__/pdf.html','_self')">
							<td>GHZF00001</td>
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
			       		<tr onclick="window.open('__PUBLIC__/pdf.html','_self')">
							<td>GHZF00001</td>
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
			       		<tr onclick="window.open('__PUBLIC__/pdf.html','_self')">
							<td>GHZF00001</td>
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
			       		<tr onclick="window.open('__PUBLIC__/pdf.html','_self')">
							<td>GHZF00001</td>
							<td>测试一</td>
							<td>测试</td>
							<td>xxxx</td>
							<td>xxxx</td>
							<td>xxxxx</td>
			       		</tr>
				</table>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>