<?php 
include ("../conn.php");
mysqli_query($conn, "set names utf8");
$id=$_GET["id"];
$sql = "delete from news where id=$id";
$result1 = mysqli_query($conn,$sql);
if($result1)
{
    echo "<script language=javascript>window.alert('成功删除,请返回');window.location.href = document.referrer;</script>";
} //result1==true
?>
