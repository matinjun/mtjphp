<?php 
$hostname = "localhost"; //������,������IP����
$database = "test"; //���ݿ���
$username = "root"; //���ݿ��û���
$password = ""; //���ݿ�����
$conn = mysqli_connect($hostname, $username, $password) or trigger_error(mysql_error() , E_USER_ERROR); 
mysqli_select_db($conn,$database ); 
$db = @mysqli_select_db($conn,$database) or die(mysqli_error());

?> 
