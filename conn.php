<?php 
$hostname = "localhost"; //主机名,可以用IP代替
$database = "test"; //数据库名
$username = "root"; //数据库用户名
$password = ""; //数据库密码
$conn = mysqli_connect($hostname, $username, $password, $database) or trigger_error(mysql_error() , E_USER_ERROR); 
//mysqli_select_db($conn,$database ); // mysqli_select_db(connection,dbname); 更改数据库

$db = mysqli_select_db($conn,$database) or die(mysqli_error());

?> 
