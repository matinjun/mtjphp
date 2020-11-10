<?php 
include ("conn.php");
mysql_query("set names gb2312");
echo "下面所有新闻数据.<br>";
$query = "select * from news ";  
$res = mysql_query($query, $conn) or die(mysql_error());
$row = mysql_num_rows($res);    //如果查询成功这里返回真否则为假
if($row)
{
	for($i=0;$i<$row;$i++)            //这里用一个FOR 语句查询显示多条结果
	{ 
		$dbrow=mysql_fetch_array($res);
		$id=$dbrow['id']; 
		$title=$dbrow['title']; 
		//$content=$dbrow['content'];   内容不用显示了.
		$add_time=$dbrow['add_time'];
		//$content = str_replace("\r", "<br>", $content);   //用替换函数据新闻内容中的空格与换行符换回html语法输出.
		//$content= str_replace(" ", "&nbsp;", $content);

		echo $id;       //PHP的输出用 echo 
		echo "  ";
		echo "<a href='edit_news.php?id=$id'>$title.</a>";   //这里意思是以GET方式把id这个变量传到edit_news.php这个页面.
		echo "   ";
		echo "<a href='del_news.php?id=$id'><font color='red'>删除</font>";
		echo "<br>";
	}
}
else
{
	echo "无相关数据";
}
?>
