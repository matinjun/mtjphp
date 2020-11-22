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
$old_depto=$_GET["depto"];   //先接收从show_dept.php传过来的depto值以确定要修改的新闻
$old_dname=$_GET["dname"];
$old_loc=$_GET["loc"];
?>
<body>
    <form action="edit_save_dept.php" method="post">
        <!--意思是以post方式把下面输入的数据传到save_dept.php页面. ,表单以</form>结束-->
        DEPTO: <input type="number" name="DEPTO"><br>
        DNAME: <input type="text" name="DNAME"><br>
        LOC  : <input type="text" name="LOC"><br>
        <!--隐藏传递了DEPTO-->
        <input type="hidden" name="old_depto" value="<?php echo $old_depto; ?>">
        <input type="hidden" name="old_dname" value="<?php echo $old_dname; ?>">
        <input type="hidden" name="old_loc" value="<?php echo $old_loc; ?>">

        <input type="submit" value="执行">
    </form>
</body>

</html>
