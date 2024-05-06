<?php
session_start();
require '../config.php';
error_reporting(5);
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
<div class="open">继续注册</div>
<div class="modal" style="height: 600px">

	<div class="form">
	<form method="post" name="form_reg" action="checkreg.php">
<!-- action="checkreg.php" -->
		    
		    <label for="email">邮箱</label>
		      <input id="uemail" type="email"  required="required" name="uemail" >
		      <label for="pass">密码</label>
		      <input id="pword1" type="password" required="required" name="pword1">
		      <label for="pass">确认密码</label>
		      <input id="pword2" type="password" required="required" name="pword2">
		      <label for="username">昵称</label>
		      <input id="uname" type="text" required="required" name="uname">
		      <label for="username">手机</label>
		      <input id="uphone" type="text" required="required" name="uphone">
		      <button type="submit" onclick="return check(); ">注册</button>
		   
		    </form>
	</div>
	<div class="invite">
		<h3>校园易站，现在注册即送大礼！</h3>
     <div class="nope1"><a href="http://localhost/school/login/index.php">登录</a></div>
     <div class="nope" style="margin-left: 95px">暂不注册</div>
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

	<script type="text/javascript">
			
	 function check() {
	 	// 检查密码
 if(document.form_reg.pword1.value=="")
    {
      alert("请输入密码");
      document.form_reg.pword1.focus();
      return false;
    } 	
     var upword1 = document.form_reg.pword1.value;
     var a=/^.*(?=.{6,16})(?=.*\d)(?=.*[A-Z])(?=.*[a-z])(?=.*[!@#$%^&*? ]).*$/;
         if(!(a.test(upword1))){ 
        alert("密码格式错误！");
         document.getElementById("pword1").value="";
         document.form_reg.pword1.focus();
        return false; 
        }
// 检查确认密码
 if(document.form_reg.pword2.value=="")
    {
      alert("请确认密码");
      document.form_reg.pword2.focus();
      return false;
    }

    if(document.form_reg.pword1.value!=document.form_reg.pword2.value)
    {
      alert("密码不一致，请重试");
      
      document.getElementById("pword2").value="";
      document.form_reg.pword2.focus();
      
      return false;
    }

// 检查昵称
 if(document.form_reg.uname.value=="")
    {
      alert("请输入昵称");
      document.form_reg.uname.focus();
      return false;
    } 	
     var uname = document.form_reg.uname.value;
     var b=/^.{2,12}$/;
         if(!(b.test(uname))){ 
        alert("昵称格式错误！");
         document.getElementById("uname").value="";
         document.form_reg.uname.focus();
        return false; 
        }
// 检查手机
 if(document.form_reg.uphone.value=="")
    {
      alert("请输入手机号");
      document.form_reg.uphone.focus();
      return false;
    } 	
     var uphone = document.form_reg.uphone.value;
     var c=/^1[34578]\d{9}$/;
         if(!(c.test(uphone))){ 
        alert("手机格式错误！");
         document.getElementById("uphone").value="";
         document.form_reg.uphone.focus();
        return false; 
        }
  

}

		</script>


	</body>




</html>