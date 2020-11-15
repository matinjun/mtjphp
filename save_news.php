<?php
include ("conn.php");
mysqli_query($conn, "set names utf8"); // mysqli_query(connection, query)

error_reporting(0); 
//下面先接收从add_news.php传过来的新闻标题与新闻内容.
//PHP变量是以$开头的,如$a,$b 变量,与C,C++一样都是以";"分号结果一句子;注释也与C,C++一样.
// 因为add_news.php表单定义的传输方式为POST所以这里要对应用POST接收,如果定义为GET则要用GET接收.
$title=$_POST[title];  //这果申请一$title变量用于保存从add_news.php传过来的新闻标题title值.
$content=$_POST[content];  //同上,保存新闻内容值.

//下面用一if语句检测系统的香港时区的时间,我们用的PHP一般以香港时间为准的,
if(function_exists('date_default_timezone_set')) { 
   date_default_timezone_set('Hongkong');//该函数为PHP5.1内置. 
} 
$add_time=date("Y-m-d"); //这句话把获取到的系统当前时间赋给变量$add_time
   
// sql语句也没有问题
$sql = "INSERT INTO news(title,content,add_time) VALUES ('$title','$content','$add_time')";

// 运行显示代码运行成功
if (mysqli_connect_errno($conn)) 
{ 
    echo "连接 MySQL 失败: " . mysqli_connect_error(); 
} 
// sql语言没有错
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));  //如果添加成功,返回真给$result ,否则为false.

if($result)
{
echo "添加新闻成功,<a href='add_news.php'>返回继续</a>";
}
else
{
echo "添加新闻失败,<a href='add_news.php'>请返回</a>";
}
?>
