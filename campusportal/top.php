<?php
require 'config.php';	
session_start();

error_reporting(5);
if(isset($_GET['delete'])){  
	unset($_SESSION['login']);
	header("location: http://localhost/school/index.php"); }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="zh-cn" xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- 规定了文本及编码格式，以防出现乱码 -->
		<title>校园易站</title>
		<link href="./css/top.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="./js/jquery-1.11.0.js"></script>
	</head>

	

	<body>
		<div id="nav-header">
		<div class="header">
<!-- logo板块 -->
			<a href="http://localhost/school/index.php" class="logo">
				<img src="./images/statics/logo2.jpg">
			</a>
<!-- 菜单板块 -->
			<nav style="width: 450px">
				<ul>
					<li>校园易站
						<div class="slide-submeu">欢迎使用校园易站平台！</div>
					</li>

					<li><a href="http://localhost/school/index.php">首页</a></li>

					<li class="news">新闻<i class="slide-icon"></i>
						<div class="slide-submeu news-submenu">
							<strong>学校动态</strong>
							<a href="#"><i class="web-icon"></i>X1</a>
							<a href="#"><i class="data-icon"></i>X2</a>
							<a href="#"><i class="ml-icon"></i>X3</a>
							<strong>易站新闻</strong>
							<a href="#"><i class="android-icon"></i>X1</a>
							<a href="#"><i class="ios-icon"></i>X2</a>
							<a href="#"><i class="python-icon"></i>X3</a>
							<strong>最新公告态</strong>
							<a href="#"><i class="python-icon"></i>X1</a>
							<a href="#"><i class="php-icon"></i>X2</a>
							<a href="#"><i class="golang-icon"></i>X3</a>
							<strong>其他新闻</strong>
							<a href="#"><i class="data-icon"></i>X1</a>
							<a href="#"><i class="data-icon"></i>X2</a>
							<a href="#"><i class="data-icon"></i>X3</a>
						</div>
					</li>

					<li>精选<i class="slide-icon"></i>
						<div class="slide-submeu">
							<a href="#" style="z-index: 200;display: block;">X1</a>
							<a href="#">X2</a>
							<a href="#">X3</a>
						</div>
					</li>

					<li>兼职<i class="slide-icon"></i>
						<div class="slide-submeu jz-box">
							<a href="javascript:;"><i class="icon1-1"></i>校内兼职 </a>
							<a href="javascript:;"><i class="icon1-2"></i>家教兼职</a>
							<a href="javascript:;"><i class="icon1-3"></i>易站推荐</a>
							<a href="javascript:;"><i class="icon1-4"></i>申请兼职</a>
						</div>
					</li>

					<li>社区<i class="slide-icon"></i>
						<div class="slide-submeu">
							<a href="#">成为管理</a>
							<a href="#">VIP</a>
							<a href="#">成为信用卖家</a>
							<a href="#">成为信用买家</a>
						</div>
					</li>

				</ul>
			</nav> 


			<div class="search">
			<form action="search.php" name="form_search">
				<input type="input" name="search" id="search" placeholder="搜索物品或新闻">
			<span class="search-icon" id="search_bottom" onclick="document.form_search.submit()"></span>
			</form>	

			</div>
<!-- 登录注册板块 -->
								
		<?php 
$con = "SELECT * FROM users WHERE uemail='".$_SESSION['login']."'";
$que = mysql_query($con);
$userinfo = mysql_fetch_array($que);
		if(isset($_SESSION['login'])){ ?>
<div class="nav-other" id="nav-other">

	<span class="user-info">
		<a href="http://localhost/school/top.php?delete=1">退出</a>
		<i></i>
		<a href="http://localhost/school/cart.php">购物车</a>
		<i></i>
		<a href="http://localhost/school/manage.php">管理</a>
			<i></i>
		 <a href="http://localhost/school/userinfo.php"><?php echo $userinfo['uname'] ?></a>
		<p>欢迎</p>
		
	</span>
</div>
<?php }else{?>
	<div class="nav-other" id="nav-other">
		<span class="user-info">
         <a href="http://localhost/school/login/register.php">注册</a>
         <i></i>
         <a href="http://localhost/school/login/index.php">登录</a>
         </span>
		<?php } ?>
	
					</div>

<!-- 登录注册板块结束 -->

		</div>
	</div>



<script type="text/javascript">
	$(function(){
      var nav_position=10;
      // var nav_position=$('#nav-header').height();
      $(document).scroll(function(){
      	$(window).scrollTop()>=nav_position?$('#nav-header').addClass('fixed'):$('#nav-header').removeClass('fixed');
      })

	})

</script>
	</body>




</html>