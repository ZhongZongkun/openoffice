<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>pdf</title>
	<script type="text/javascript" src="http://sources.ikeepstudying.com/js/jquery-1.8.3.min.js"></script>  
	<script type="text/javascript" src="__PUBLIC__/js/jquery.media.js"></script>
	<script type="text/javascript">  
    $(function() {  
        $('a.media').media({width:650, height:650});  
    });  

</script> 
<style>
	.media {
		margin: 0 auto;
	}
</style>
</head>
<body>
		<frame src="/openoffice/uploads/TEST.pdf"></frame>
		<a class="media" href="/openoffice/uploads/test1.pdf"></a>  
</body>
</html>