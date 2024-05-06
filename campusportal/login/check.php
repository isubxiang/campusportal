<?php
session_start();
require '../config.php';
error_reporting(5);

				
				    $email=$_POST['email'];
					$pword=$_POST['pword'];
					
					if($email==null||$pword==null){
						die("不能为空！");
					}
					// 将form表单中的email、username、pword、pword2进行赋值
					$pword=md5($pword); 
					// 将注册的密码进行md5加密并插入进users数据表中
					$query="SELECT * FROM users WHERE `uemail`='$email' AND `upassword`='$pword'";
					$result = mysql_query($query);
					if ($result) {
						$row=mysql_fetch_array($result);
						if ($row) {
							// 获取并返回登陆之前访问的页面地址$_SESSION['userurl'
							 echo('<script type="text/javascript">
	window.location.href = "http://localhost/school/index.php";

						</script>');
    
							 $_SESSION['login'] = $email;

							 $_SESSION['uname'] = $row['uname'];
							exit;
						}
						else{
 
		echo('<script type="text/javascript">alert("登陆失败");
		window.history.back(-1);
		</script>');
						}
					}
				?>
				<!-- 
echo('<script type="text/javascript">
	window.location.href = "http://localhost/school/index.php";

						</script>');
				 -->
<!--

 if (isset ($_SESSION['userurl']))
	{$url = $_SESSION['userurl']; header("location: $url");}
    else{echo('<script type="text/javascript">
	window.location.href = "http://localhost/school/index.php";
						</script>');} 

-->

				<!-- window.history.back(-1); -->