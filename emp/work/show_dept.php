<?php
include ("../conn.php");
mysqli_query($conn, "set names utf8");
$query = "select * from dept";  
$res = mysqli_query($conn, $query);
$row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
if($row)
{
    echo "<table>";
    // 使用表格形式输出
    echo "<tr><th>DEPTO</th><th>DNAME</th><th>LOC</th><th></th><th></th></tr>";
	for($i=0;$i<$row;$i++)            //这里用一个FOR 语句查询显示多条结果
	{ 
		$dbrow=mysqli_fetch_array($res);
		$depto=$dbrow['DEPTO']; 
		$dname=$dbrow['DNAME']; 
		$loc=$dbrow['LOC'];

        echo "<tr>";
        echo "<td>$dbrow[0]</td><td>$dbrow[1]</td><td>$dbrow[2]</td>";
		//echo $depto;       //PHP的输出用 echo 
		//echo "  ";
  //      echo $dname;   //这里意思是以GET方式把depto这个变量传到edit_news.php这个页面.
  //      echo "  ";
		//echo $loc; 
		//echo "  ";
        echo "<td><a href='del_dept.php?depto=$depto'><font color='red'>删除</font></a></td>";
        // 此处需要传递多个值，使用&连接
        echo "<td><a href='edit_dept.php?depto=$depto&dname=$dname&loc=$loc'><font color='blue'>修改</font></a></td>";
        echo "</tr>";
		echo "<br>";
    }
    echo "</table>";
}

echo "<a href='add_dept.html'><font color='green'>添加标签</font></a>";
?>
