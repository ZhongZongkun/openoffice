<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		 <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<!-- 新 Bootstrap 核心 CSS 文件 -->
	<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">

	<!-- 可选的Bootstrap主题文件（一般不用引入） -->
	<link rel="stylesheet" href="__PUBLIC__/css/bootstrap.min.css">

	<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
	<script src="__PUBLIC__/js/jquery-2.2.2.min.js"></script>

	<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
	<script src="__PUBLIC__/js/bootstrap.min.js"></script>
	<style>
	body {
		background-color: #f0f0f0;
	}
		#container {
			width: 700px;
			height: 1000px;
			background-color: #fff;
			/*border: 1px solid #888;*/
			margin: 30px auto;
			overflow: hidden;
			position: relative;
			box-shadow: 1px 2px 5px #000;
		}
		#cavsElem{
			position: absolute;
		}
		.btns {
			width: 30px;
			position: fixed;
			top: 27%;
			left: 0;
			
		}
		.btn {
	    display: inline-block;
	    padding: 6px 12px;
	    margin-bottom: 0;
	    font-size: 14px;
	    font-weight: 400;
	    line-height: 1.42857143;
	    text-align: center;
	    white-space: normal;
	    vertical-align: middle;
	    -ms-touch-action: manipulation;
	    touch-action: manipulation;
	    cursor: pointer;
	    -webkit-user-select: none;
	    -moz-user-select: none;
	    -ms-user-select: none;
	    user-select: none;
	    background-image: none;
	    border: 1px solid transparent;
	    border-radius: 4px;
	}
	</style>
<body >

	<div id="container">
		<canvas id="cavsElem">
			你的浏览器不支持canvas，请升级浏览器
		</canvas>
	</div>
	<!-- 根据img数量，canvas自适应 -->
	<?php if(is_array($imgarr)): foreach($imgarr as $key=>$v): ?><img id="imgB" src="<?php echo ($v['img']); ?>" alt="" style="display: none;"><?php endforeach; endif; ?>
	<div class="btns">
			<button id="pre" class="btn btn-primary">上一页</button> 
			<button id="next" class="btn btn-primary">下一页</button> 
			<button id="saveImageBtn" class="btn btn-info">导出图片</button> 
			<button id="downloadImageBtn"  class="btn btn-success">下载图片</button> 
		</div>

	<script>
	
		(function(){

			
			var pre = document.getElementById('pre');
			var next = document.getElementById('next');
			var canvas = document.querySelector('#cavsElem');



			var ctx = canvas.getContext('2d');
			 var dov = document.getElementsByTagName("img");
			 console.log(dov.length);
			// var numm = doc.length;
			canvas.width = 700;
			canvas.height = 1000*dov.length;
			// canvas.style.border = "1px solid #000";
			
			pre.onclick = function() {
				target += 1000;
			}
			next.onclick = function() {
				target -=1000;
			}
			var leader = 0,target = 0;
			setInterval(function(){
				leader = leader + (target - leader)/10;
				if (target <= -canvas.height ) {
					target = -(canvas.height-1000);
				}else if(target >= 0 ) {
					target = 0;
				}
				canvas.style.top = leader + 'px';
			},40)



			var imgB = document.querySelectorAll("#imgB");
			// console.log(imgB.length);
			for (var i = 0; i < imgB.length; i++) {
				var that = i;
				// imgB.addEventListener("load", function(e){
				// });
				// console.log(that);
				// location.reload();
				ctx.drawImage(imgB[that], 10,1000*that);

			}

			window.onload = function() { 
			
			var saveButton = document.getElementById("saveImageBtn"); 
			bindButtonEvent(saveButton, "click", saveImageInfo); 
			var dlButton = document.getElementById("downloadImageBtn"); 
			bindButtonEvent(dlButton, "click", saveAsLocalImage); 
			canvas.onmousedown = function(e) {
				ctx.strokeStyle = "red";
				ctx.lineWidth = 4;
				var x = e.clientX - canvas.getBoundingClientRect().left;
				var y = e.clientY - canvas.getBoundingClientRect().top;
				ctx.beginPath();
				ctx.moveTo(x, y);

				canvas.onmousemove = function(event) {
					var x = event.clientX - canvas.getBoundingClientRect().left;
					var y = event.clientY - canvas.getBoundingClientRect().top;
					// canvas.clearRect(0, 0, 900, 600);
					ctx.lineTo(x, y);
					ctx.stroke();
				};
				canvas.onmouseup = function(event) {
					canvas.onmousemove = null;
					canvas.onmouseup = null;
				};
			};
			
			}; 
		

			function bindButtonEvent(element, type, handler) 
			{ 
				if(element.addEventListener) { 
				element.addEventListener(type, handler, false); 
				} else { 
				element.attachEvent('on'+type, handler); 
				} 
			} 

			function saveImageInfo () 
			{ 
				var mycanvas = document.getElementById("cavsElem"); 
				var image = mycanvas.toDataURL("image/png"); 
				var w=window.open('about:blank','image from canvas'); 
				w.document.write("<img src='"+image+"' alt='from canvas'/>"); 
			} 
			
			function saveAsLocalImage () { 
				var myCanvas = document.getElementById("cavsElem"); 
				// here is the most important part because if you dont replace you will get a DOM 18 exception. 
				// var image = myCanvas.toDataURL("image/png").replace("image/png", "image/octet-stream;Content-Disposition: attachment;filename=foobar.png"); 
				var image = myCanvas.toDataURL("image/png").replace("image/png", "image/octet-stream"); 
				window.location.href=image; // it will save locally 
			} 
			
		}());

	
	</script>

</body>
</html>