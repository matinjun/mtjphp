<?php
include ("../conn.php");
mysqli_query($conn, "set names utf8");
$query = "select * from emp";  
$res = mysqli_query($conn, $query);
$row = mysqli_num_rows($res);    //如果查询成功这里返回真否则为假
if($row)
{
    echo "<table align='center'>";
    // 使用表格形式输出
    // 首先打印出表头
    echo "<tr>";
    echo "<th>EMPNO</th>";
    echo "<th>ENAME</th>";
    echo "<th>JOB</th>";
    echo "<th>MGR</th>";
    echo "<th>HIREDATE</th>";
    echo "<th>SAL</th>";
    echo "<th>COMM</th>";
    echo "<th>DEPTNO</th>";
    echo "<th></th>";
    echo "<th></th>";
    echo "</tr>";
	for($i=0;$i<$row;$i++)            //这里用一个FOR 语句查询显示多条结果
	{ 
        $dbrow=mysqli_fetch_array($res);
        
        $EMPNO = $dbrow[0];
        $ENAME = $dbrow[1];
        $JOB = $dbrow[2];
        $MGR = $dbrow[3];
        $HIREDATE = $dbrow[4];
        $SAL = $dbrow[5];
        $COMM = $dbrow[6];
        $DEPTNO = $dbrow[7];

        // 输出每一行内容
        // 也可以使用mysqli_num_fields函数返回列数再加上循环实现
        echo "<tr>";
        echo "<td>$dbrow[0]</td>";
        echo "<td>$dbrow[1]</td>";
        echo "<td>$dbrow[2]</td>";
        echo "<td>$dbrow[3]</td>";
        echo "<td>$dbrow[4]</td>";
        echo "<td>$dbrow[5]</td>";
        echo "<td>$dbrow[6]</td>";
        echo "<td>$dbrow[7]</td>";
        // 使用url传值需要添加引号“'”
        echo "<td><a href='del_emp.php?ENAME=$ENAME'><font color='red'>删除</font></a></td>";
        // 此处需要传递多个值，使用&连接
        echo "<td><a href='edit_emp.php?ENAME=$ENAME'><font color='blue'>修改</font></a></td>";
        echo "</tr>";
    }
    echo "</table>";
}

echo "<a href='add_emp.html'><font color='green'>添加标签</font></a>";
?>