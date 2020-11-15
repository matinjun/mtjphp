<?php 
include ("../conn.php");
mysqli_query($conn, "set names utf8");
//先接收传过来的数据.
$id=$_POST[id];
$title=$_POST[title];
$content=$_POST[content];

$query = "Update news set title='$title',content='$content' where id=$id"; 
echo $query;
$res = mysqli_query($conn, $query);
//echo "修改成功";
if($res)
{
    echo "<script language=javascript>window.alert('修改成功,请返回');history.back(1);</script>";
}
else
{
    echo "<script language=javascript>window.alert('修改失败,请返回');history.back(1);</script>";
}
?>
