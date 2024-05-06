<?php
require '../config.php';	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 规定了文本及编码格式，以防出现乱码 -->
		<title>校园易站</title>
		<link href="../css/top.css" rel="stylesheet" type="text/css" />
		<link href="./css/login.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="../js/jquery-1.11.0.js"></script>
	</head>



	<body>
		<?php require "../top.php" ?>
<div class="open">继续登录</div>
<div class="modal">

	<div class="form">
	<form method="post" action="check.php">
		<label>邮箱</label>
		<input type="email" name="email" id="email">
		<label>密码</label>
		<input type="password" name="pword" id="pword" required="required">
		<button type="submit">登录</button>
	</form>
	</div>
	<div class="invite">
		<h3>校园易站，现在注册即送大礼！</h3>
     <div class="nope1"><a href="http://localhost/school/login/register.php">注册</a></div>
     <div class="nope" style="margin-left: 95px">暂不登录</div>
     <div title="关闭" class="close"></div>


	</div>
</div>

			<script src="js/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
		$(".close, .nope").on('click', function () {
		  $('.modal').addClass('hidden');
		  $('.open').addClass('active');
		})

		$(".open").on('click', function () {
		  $(this).removeClass('active');
		  $('.modal').removeClass('hidden');
		})
	</script>



	</body>




</html>