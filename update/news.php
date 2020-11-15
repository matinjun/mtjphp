<?php 
// 显示所有新闻，让你选择修改
include ("../conn.php");
mysqli_query($conn, "set names utf8");
echo "下面所有新闻数据.<br>";
$query = "select * from news ";  
$res = mysqli_query($conn, $query);
$row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
if($row)
{
	for($i=0;$i<$row;$i++)            //这里用一个FOR 语句查询显示多条结果
	{ 
		$dbrow=mysqli_fetch_array($res);
		$id=$dbrow['id']; 
		$title=$dbrow['title']; 
		$add_time=$dbrow['add_time'];

		echo $id;       //PHP的输出用 echo 
		echo "  ";
		echo "<a href='edit_news.php?id=$id'>$title.</a>";   //这里意思是以GET方式把id这个变量传到edit_news.php这个页面.
		echo "   ";
		echo "<a href='del_news.php?id=$id'><font color='red'>删除</font></a>";
		echo "<br>";
	}
}
else
{
	echo "无相关数据";
}
?>
