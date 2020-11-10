<?php 
$hostname = "localhost"; //主机名,可以用IP代替
$database = "xiaoma"; //数据库名
$username = "root"; //数据库用户名
$password = ""; //数据库密码
// php找不到数据库
$conn = mysqli_connect($hostname, $username, $password, $database);// or trigger_error(mysql_error() , E_USER_ERROR); 
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";
mysqli_query($conn, "INSERT INTO news(title,content,add_time) VALUES ('asdaf',' dsas','2020-11-10')") or die(mysqli_error($conn));
//$db = mysqli_select_db($conn,$database) or die(mysqli_error($conn));

?> 
