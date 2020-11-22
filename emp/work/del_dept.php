<?php 
include ("../conn.php");
mysqli_query($conn, "set names utf8");
$depto=$_GET["depto"];
$sql = "delete from dept where DEPTO=$depto";
$result1 = mysqli_query($conn,$sql);
if($result1)
{
    echo "<script language=javascript>window.alert('成功删除,请返回');window.location.href = document.referrer;</script>";
} //result1==true
else {
    echo "<script language=javascript>window.alert('删除失败,请返回');window.location.href = document.referrer;</script>";
}
?>
