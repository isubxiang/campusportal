<?php
session_start();
require '../config.php';
error_reporting(5);

				
				error_reporting(0);
				    $email=$_POST['uemail'];
					$pword=$_POST['pword1'];
					$name=$_POST['uname'];
					$phone=$_POST['uphone'];	
					
	 $query="SELECT * FROM users WHERE `uemail`='$email' ";
					$result = mysql_query($query);
					if ($result) {
						$row=mysql_fetch_array($result);
						if ($row){

							echo('<script type="text/javascript">alert("邮箱已被注册！请重新注册");
								window.location.href = "register.php";

		</script>');
						
						}
					} 
				else{
                  


					// 将form表单中的email、username、pword、pword2进行赋值
					$pword=md5($pword); 
					// 将注册的密码进行md5加密并插入进users数据表中
					$query="INSERT INTO users(`uemail`,`upassword`,`uname`,`uphone`) VALUES('$email','$pword','$name','$phone')";
					$result = mysql_query($query)or die("error:".mysql_error());
				    echo $query;
					if ($result){
						echo('<script type="text/javascript">alert("注册成功");
							window.location.href = "index.php";
						</script>');
					}else {
						echo('<script type="text/javascript">alert("注册失败");
							
						</script>');
						
					}

}

                  




				
				?>


	<!-- header("location: http://localhost/school/login/register.php"); -->


	<!-- $query="SELECT * FROM users WHERE `uemail`='$email' ";
					$result = mysql_query($query);
					if ($result) {
						$row=mysql_fetch_array($result);
						if ($row){

							echo('<script type="text/javascript">alert("邮箱已被注册！请重新注册");
								window.location.href = "register.php";

		</script>');
						
						}
					} -->

					<!-- window.history.back(-1); -->