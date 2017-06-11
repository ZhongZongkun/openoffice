<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>pdf</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    	<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">
		<script src="__PUBLIC__/js/jquery-2.2.2.min.js"></script>
	</head>
	
	<style>
		* {
			margin: 0;
			padding:0;
			font-size: 0;
		}
		body {
			background:url('__PUBLIC__/images/bgg.png') center center repeat;
			

		}
		#box {
			width: 1202px;
			height: 1680px;
			overflow: hidden;
			margin: 30px auto;
			margin-top: 120px;
			position: relative;
			border: 2px solid #c0c0c0;
			
		}
		canvas {
			border: none!important;
		}
		#container {
			-ms-touch-action: none!important;
			position: absolute;
			top: 0;
			left: 0;
		}
		button {
			font-size: 15px;
		}
		img {
			height: 100%;
		}
		#imgs {
			position: absolute;
			top: 0;
			left: 0;
			background-color: #fff;
		}
		#mask {
			width: 100%;
			height: 100%;
			position: absolute;
			z-index: 1;
			display: block;
		}
		a {
			font-size: 14px;
		}
		.btns {
			width: 20px;
			position: fixed;
			right: 20px;
			top: 21%;
			z-index: 999;
		}
		.btn {
			font-size: 26px;
		}
		.btns button {
			padding: 6px;
			white-space:normal;
		}
		.btns a {
			padding: 6px;
			white-space:normal;
		}
		.imgshow {
			position: fixed;
			width: 100%;
			height: 300px;
			z-index: 999;
			left: 0;
			bottom:0;
			background-color:rgba(0, 0, 0, 0.8);
			
		}
		.imgshowbox {
			width: 91%;
			height: 300px;
			left: 0;
			bottom:0;
			margin: 0 auto;
			position: relative;
			overflow: hidden;
		}
		.imgshow ul {
			list-style: none;
			font-size: 0;
			padding-top: 20px;
			width: 400%;
			position: absolute;
			left: 0;
			top:0;
		}
		.imgshow ul li{
			padding: 0;
			width: auto;
			height: 240px;
			display: inline-block;
			float: left;
			margin-left: 11px;
			border:1px solid #eae7e7;
		}
		.imgshow ul li img{
			border-radius: 5px;
		}
		.modal-content{
			-ms-touch-action: none!important;
			margin-top: 20%;
			background: url(__PUBLIC__/images/bgg.png);
		}
		.modal-backdrop {
		}
		.modal-body1{
			width: 100%;
			height: 1000px;
			overflow: scroll;
			margin-right: -20px;
		}
		.modal-content {
			width: 1100px;
			margin-left: -250px;
			text-align: center;
		}
		#yema {
			width: 40px;
			height: 40px!important;
			background-color: #c0c0c0;
			position: absolute;
			z-index: 100;
			right: 0;
			bottom: 0;
			text-align: center;
			font-size: 16px;
			line-height: 40px;
		}
		#imgshow_list li {
			position: relative;
		}
	</style>
<body>

<div id="box">
<div id="yema">12</div>
	<div id="mask"></div>
	<div id="imgs">
		<?php if(is_array($imgarr)): foreach($imgarr as $key=>$v): ?><img id="imgB" src="<?php echo ($v['img']); ?>"  alt=""><!-- width="650" height="850" --><?php endforeach; endif; ?>
	</div>
	<div id="container">
		<!-- <canvas id="cavsElem0">
			你的浏览器不支持canvas，请升级浏览器
		</canvas> -->
		<!-- <canvas id="cavsElem1">
			你的浏览器不支持canvas，请升级浏览器
		</canvas> -->
		<!-- <canvas id="cavsElem2">
			你的浏览器不支持canvas，请升级浏览器
		</canvas> -->
	</div>
	
</div>

<div class="btns">
	<button id="rtop" class=" btn btn-default">返回顶部</button>
	<button id="kpre" class=" btn btn-success">上四页</button>
	<button id="pre" class="btn btn-info" >上一页</button>
	<button id="sign" class=" btn btn-success">标注</button>
	<button id="next" class="btn btn-info">下一页</button>
	<button id="knext" class=" btn btn-success">下四页</button>
	<button id="cle" class="btn btn-warning">橡皮擦</button>
	<!-- <button id="chexiao">撤销</button> -->
	<a class="btn btn-danger" href="<?php echo U('Admin/User/index');?>">返回首页</a>
<!-- 	<button type="button" onclick="fangda()">放大</button>
    <button type="button" onclick="suoxiao()">缩小</button>
    <button type="button" onclick="huanyuan()">还原</button> -->
</div>
<div class="imgshow" style="-ms-touch-action: none!important;">
		<div style="width: 100%;height: 20px; position: absolute; top: 40%; padding: 0 10px;">
			<a id="mleft" class="glyphicon glyphicon-chevron-left" style="font-size: 29px; color: #fff;float: left; text-decoration: none;"></a>
			<a id="mright" class="glyphicon glyphicon-chevron-right" style="font-size: 29px; color: #fff; float: right; text-decoration: none;"></a>
		</div>
		<div class="imgshowbox">
			<ul id="imgshow_list">
				<?php if(is_array($imgsarr)): foreach($imgsarr as $key=>$v): ?><li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("<?php echo ($v["file"]); ?>");' data-target="#myModal1" style="overflow:hidden"><img src="<?php echo ($v["file"]); ?>" alt=""> <p style="width:100%;height:25px; line-height:25px; overflow:hidden;  background:rgba(0,0,0,.8);position:absolute;bottom:0;left:0; margin:0;color:#fff;font-size:13px;"><?php echo ($v["info"]); ?></p></li><?php endforeach; endif; ?>
				<!-- <li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("tip.jpg");' data-target="#myModal1" style="overflow:hidden"><img src="__PUBLIC__/images/tip.jpg" alt=""> <p style="width:100%;height:25px; line-height:25px; overflow:hidden;  background:rgba(0,0,0,.8);position:absolute;bottom:0;left:0; margin:0;color:#fff;font-size:13px;">我是文字介绍</p></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("tx2.png");' data-target="#myModal1"><img src="__PUBLIC__/images/tx2.png" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("tx3.png");' data-target="#myModal1"><img src="__PUBLIC__/images/tx3.png" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("tx4.png");' data-target="#myModal1"><img src="__PUBLIC__/images/tx4.png" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("tx5.png");' data-target="#myModal1"><img src="__PUBLIC__/images/tx5.png" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("tx6.png");' data-target="#myModal1"><img src="__PUBLIC__/images/tx6.png" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("1.jpg");' data-target="#myModal1"><img src="__PUBLIC__/images/1.jpg" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("2.jpg");' data-target="#myModal1"><img src="__PUBLIC__/images/2.jpg" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("3.jpg");' data-target="#myModal1"><img src="__PUBLIC__/images/3.jpg" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("1.jpg");' data-target="#myModal1"><img src="__PUBLIC__/images/1.jpg" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("2.jpg");' data-target="#myModal1"><img src="__PUBLIC__/images/2.jpg" alt=""></li>
				<li class="btn btn-primary btn-lg" data-toggle="modal" onclick='chimg("3.jpg");' data-target="#myModal1"><img src="__PUBLIC__/images/3.jpg" alt=""></li>
				 -->
			</ul>
		</div>
	</div>


    <!-- Modal -->
    <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog"style="z-index: 9999; margin-top: 350px;">
        <div class="modal-content" >
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">图片展示</h4>
          </div>
          <div class="modal-body1" >
          <div class="modal-body">
               <img id="targetimg" src="__PUBLIC__/images/tip.jpg"/>
          </div>
          </div>
          <div class="modal-footer">
          	<a class="glyphicon glyphicon-zoom-in" id="fangda" style="width:60px;height:60px;font-size: 40px; padding-top:20px; margin-top: 10px; margin-right: 30px; text-decoration: none;display: inline-block; text-align: center;line-height: 25px;"></a>
          	<a class="glyphicon glyphicon-zoom-out" id="suoxiao" style="width:60px;height:60px;font-size: 40px; padding-top:20px;margin-top: 10px; margin-right: 60px;text-decoration: none;display: inline-block; text-align: center;line-height: 25px;"></a>
            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->
          </div>
        </div>
      </div>
    </div>
    
    <script src="__PUBLIC__/js/bootstrap.min.js"></script>
    <!-- pinchzoom requires: jquery -->

  

	<script>
	// 页面放大
		// var i=0;
		// document.onkeyup=function(){
		//     var IEKey = event.keyCode;
		// 　　if (IEKey == 76) {
		//     　　i++;
		//     　　document.body.style.zoom=1+i/10;
		// 　　}
		// 　　if (IEKey == 83) {
		//     　　i--;
		//     　　document.body.style.zoom=1+i/10;
		// 　　}
		// 　　if (IEKey == 82) {
		//     　　document.body.style.zoom=1;
		//     　　i=1;
		// 　　}
		// }

		// function fangda(){
		// 	　i++;
		// 	document.body.style.zoom=1+i/10;	
		// 	}
		// function suoxiao(){
		// 	　i--;
		// 	document.body.style.zoom=1+i/10;
			
		// 	}
		// function huanyuan(){
		// 	　document.body.style.zoom=1;
		//     　　i=1;
		// 	}
		function chimg(src) {
				console.log(src);
				targetimg.src = src;
			}
		(function(){
			
			
			// 获取变量
			var fangda = document.getElementById('fangda');
			var suoxiao = document.getElementById('suoxiao');
			var targetimg = document.getElementById('targetimg');

			var box = document.getElementById('box');
			var pre = document.getElementById('pre');
			var kpre = document.getElementById('kpre');
			var knext = document.getElementById('knext');
			var next = document.getElementById('next');
			var container = document.getElementById('container');
			var imgs = document.getElementById('imgs');
			var imgscont = imgs.children;
			var sign = document.getElementById('sign');
			var cle = document.getElementById('cle');
			var mask = document.getElementById('mask');
			var mleft = document.getElementById('mleft');
			var mright = document.getElementById('mright');
			var rtop = document.getElementById('rtop');
			var imgshow_list = document.getElementById('imgshow_list');
			var canvass = document.getElementsByTagName('canvas');
			var count = 0;
			var yema = document.getElementById('yema');
			var yemacont = 1;

			
			//图片缩放按钮
			
			targetimg.width = targetimg.width*0.2;
			
				// $('#fangda').bind('click',function(){
				// 	if (targetimg.width >= 5000) {
				// 		targetimg.width = targetimg.width;
				// 	}else {
				// 		targetimg.width = targetimg.width*1.3 ;
				// 	}
				// })
			suoxiao.onclick = function() {
				if (targetimg.width <= 1100) {
					targetimg.width = targetimg.width;
				}else {
					targetimg.width = targetimg.width*0.7 ;
				}
			}
			fangda.onclick = function() {
				if (targetimg.width >= 5000) {
					targetimg.width = targetimg.width;
				}else {
					targetimg.width = targetimg.width*1.3 ;
				}
			}
			// 动态
			var con = $('#imgs').outerHeight(true);
			var count = count + canvass.length*8400;
			var th = 0;
			
			function judge() {
				for (var i = 0; i < canvass.length; i++) {
					th = i;
				};
				if (con >= count) {
					console.log(true);
					$('<canvas id="cavsElem' + i + '">你的浏览器不支持canvas，请升级浏览器</canvas>').appendTo('#container');
					canva("cavsElem" +i+ "")
					count = canvass.length*8400;
					console.log(count);
				}
			}
			judge();
			judge();
			judge();
			judge();
			judge();
			judge();
			// 遮罩
			sign.onclick =function() {
				mask.style.display = "none"
			}

			// 橡皮擦
			// 设置橡皮擦大小
			var eraserWidth = 50;
            var eraserHeight = 50;
            var earser=false;
			function getMousePos (oContext, evt) {
	            var rect = oContext.getBoundingClientRect();
	            return {
	                x: evt.clientX - rect.left,
	                y: evt.clientY - rect.top
	                   };
            }
             box.addEventListener("mousemove",function(evt) {
                var mousePos=getMousePos(box,evt);
                mouseX=mousePos.x;
                mouseY=mousePos.y;
                var message = "鼠标指针坐标：" + mousePos.x + "," + mousePos.y;
                //console.log(message);
            })
            cle.onclick = function() {   
                earser=true;
                mask.style.display = "none";
            }
			// 标记
			function canva(id) {
				var canvas = document.getElementById(id);
				var ctx = canvas.getContext('2d');

				canvas.width = 1200;
				canvas.height = 8400;
				canvas.style.border = "1px solid #000";
				ctx.lineWidth = 4;
				ctx.strokeStyle = 'rgba(255,0,0,0.5)'; 
					canvas.onmousedown = function(e) {
						var x = e.clientX - canvas.getBoundingClientRect().left;
						var y = e.clientY - canvas.getBoundingClientRect().top;
						 if (earser) {
	                    ctx.moveTo(x,y);
		                }
		                else
		                {
		                    ctx.beginPath();
		                    ctx.moveTo(x, y);
		                }

						canvas.onmousemove = function(event) {
							var x = event.clientX - canvas.getBoundingClientRect().left;
							var y = event.clientY - canvas.getBoundingClientRect().top;
							// canvas.clearRect(0, 0, 900, 600);
							 if(earser)
		                    {
		                        ctx.clearRect(x-25,y-25,eraserWidth,eraserHeight);
		                    }
		                    else{
		                        // ctx.clearRect(mouseX,mouseY,eraserWidth,eraserHeight);
		                        ctx.lineTo(x, y);
		                        ctx.stroke();
		                    }
						};
						canvas.onmouseup = function(event) {
							canvas.onmousemove = null;
							canvas.onmouseup = null;
							earser=false;
							mask.style.display = "block"
						};
					};
				
			}
			// canva('cavsElem');
			// canva('cavsElem1');
			// canva('cavsElem2');

			// 返回顶部
			rtop.onclick = function() {
				target = 0;
			}
			// 上下翻页
			pre.onclick = function() {
				target += 1680;
				yemacont -=1;
			}
			kpre.onclick = function() {
				target += 6700;
				yemacont -=4;
			}
			next.onclick = function() {
				target -= 1680;
				yemacont +=1;
			}
			knext.onclick = function() {
				target -= 6700;
				yemacont +=4;
			}

			// zuoyou
			mleft.onclick = function() {
				target1 += 600;
			}
			mright.onclick = function() {
				target1 -= 200;

			}

			var leader = 0,target = 0;
			var leader1 = 0,target1 = 0;
			setInterval(function(){
				leader = leader + (target - leader)/10;
				if (target >= 0) {
					target =0;
					yemacont = 1;
				}else if(target <= -con+1680) {
					target = -con+1680;
					yemacont = imgscont.length;
				}
				imgs.style.top = container.style.top =leader+"px";
				yema.innerHTML = yemacont;
			},30)
			// imgshow_list
			
			

			setInterval(function(){
				leader1 = leader1 + (target1 - leader1)/10;
				if (target1 >= 0) {
					target1 =0;
				}else if(target1 <= -2050) {
					target1 = -2050;
				}
				imgshow_list.style.left =leader1+"px";
			},40)
			// // 撤销
			// function chexiao1(id) {
			// 	var canvas = document.getElementById(id);
			// 	var ctx = canvas.getContext('2d');
			// 	ctx.clearRect(0,-leader,650,-leader+850);
			// 	console.log('success')
			// }
			// chexiao.onclick = function() {
			// 	console.log(-leader)
			// 	chexiao1('cavsElem');
			// 	chexiao1('cavsElem1');
			// 	chexiao1('cavsElem2');
			// }
		}());
		

	</script>
</body>
</html>