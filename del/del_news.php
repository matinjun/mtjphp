<?php 
include ("conn.php");
mysql_query("set names gb2312");
$id=$_GET[id];
$sql = "delete from news where id=$id";
$result1 = @mysql_query($sql,$conn) or die(mysql_error());
if($result1)
{
?>
echo "<script language=javascript>window.alert('成功删除,请返回');history.back(1);</script>";
 <?php
} //result1==true
?>
