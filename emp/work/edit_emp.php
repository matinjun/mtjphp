<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf8" />
    <title>修改记录</title>
</head>
<?php
include ("../conn.php");
mysqli_query($conn, "set names utf8");
// 接收旧的主键
$old_ename=$_GET["ENAME"];
?>
<body>
    <form action="edit_save_emp.php" method="post">
        <!--意思是以post方式把下面输入的数据传到save_dept.php页面. ,表单以</form>结束-->
        EMPNO    : <input type="number" name="EMPNO">   <br>
        ENAME    : <input type="text"   name="ENAME">   <br>
        JOB      : <input type="text"   name="JOB">     <br>
        MGR      : <input type="number" name="MGR">     <br>
        HIREDATE : <input type="text"   name="HIREDATE"><br>
        SAL      : <input type="number" name="SAL">     <br>
        COMM     : <input type="number" name="COMM">    <br>
        DEPTNO   : <input type="number" name="DEPTNO">  <br>
 
        <!--隐藏传递了DEPTO-->
        <!--因为要找以前的，旧标签要加进去-->
        <!--这里需要将主键传到文件edit_save_emp.php-->
        <input type="hidden" name="old_ename" value="<?php echo $old_ename; ?>">

        <input type="submit" value="执行">
    </form>
</body>

</html>
