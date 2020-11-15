<?php 
include ("conn.php");
mysqli_query($conn, "set names utf8");
echo "下面为查询id在1到3的范围.<br>";
$query = "select * from news where id >= 1 and id <= 2";    //这样可能有很多标题包含有这四个字的新闻都会显示出来. 大家可以添加多几条新闻试试.还可以用OR 或AND 限制更多查询条件.
$res = mysqli_query($conn, $query);
$row = mysqli_num_rows($res);    //返回查询到的结果数
if($row)
{
for($i=0;$i<$row;$i++)            //这里用一个FOR 语句查询显示多条结果
{ 
$dbrow=mysqli_fetch_array($res);
$id=$dbrow['id']; 
$title=$dbrow['title']; 
$content=$dbrow['content']; 
$add_time=$dbrow['add_time'];
$content = str_replace("\r", "<br>", $content);   //用替换函数据新闻内容中的空格与换行符换回html语法输出.
$content= str_replace(" ", "&nbsp;", $content);

echo $id;       //PHP的输出用 echo 
echo "  ";
echo $title."<br>";   //<br>为换行
echo $add_time;
echo "<br>";
echo $content;
echo "<br>";
echo "--------------------------------";
echo "<br>";
}
}
else
{
echo "无相关数据";
}
// 到此就结束了数据查询的学习
?>
