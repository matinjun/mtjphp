<?php
include ("../conn.php");
mysqli_query($conn, "set names utf8"); // mysqli_query(connection, query)

//下面先接收从add_news.php传过来的新闻标题与新闻内容.
//PHP变量是以$开头的,如$a,$b 变量,与C,C++一样都是以";"分号结果一句子;注释也与C,C++一样.
// 因为add_news.php表单定义的传输方式为POST所以这里要对应用POST接收,如果定义为GET则要用GET接收.
$DEPTO = $_POST['DEPTO'];
$DNAME = $_POST['DNAME'];
$LOC = $_POST['LOC'];
$oldDEPTO = $_POST["old_depto"];
$oldDNAME = $_POST["old_dname"];
$oldLOC = $_POST["old_loc"];
   
// sql语句也没有问题
$sql = "UPDATE dept set DEPTO=$DEPTO, DNAME='$DNAME', LOC='$LOC' where DEPTO=$oldDEPTO and DNAME='$oldDNAME' and LOC='$oldLOC'";
echo $sql;

// sql语言没有错
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));  //如果添加成功,返回真给$result ,否则为false.

if($result)
{
echo "修改成功,<a href='show_dept.php'>返回继续</a>";
}
else
{
echo "修改失败,<a href='show_dept.php'>请返回</a>";
}
?>
