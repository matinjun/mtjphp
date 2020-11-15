<?php 
include ("conn.php");
mysql_query("set names gb2312");
//先接收传过来的数据.
$id=$_POST[id];
$title=$_POST[title];
$content=$_POST[content];

$query = "Update news set title='$title',content='$content' where id=$id"; 
echo $query;
$res = mysql_query($query, $conn) or die(mysql_error());
//echo "修改成功";
if($res)
{
?>
<?php
echo "<script language=javascript>window.alert('修改成功,请返回');history.back(1);</script>";

}
else
{
?>
echo "<script language=javascript>window.alert('修改失败,请返回');history.back(1);</script>";
<?php
}
?>
