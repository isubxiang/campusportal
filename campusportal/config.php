<?php
header('Content-Type:text/html;charset=utf-8');
error_reporting(0);
@define('HOST','localhost');
@define('USER','root');
@define('PWD','');
@define('NAME','school');
// 定义phpMyadmin的用户名及密码
$config=@mysql_connect(HOST,USER,PWD) or die("数据库平台连接错误，错误的类型是：".mysql_error());
mysql_select_db(NAME,$config) or die("数据库匹配错误，错误的类型是：".mysql_error());
mysql_query('SET NAMES UTF8') or die("编码格式/字符集错误，错误的类型是：".mysql_error());
// mysql_query()执行MYSQL茶查询语句
?>


