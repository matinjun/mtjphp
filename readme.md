# php操作数据库
## 遇到的问题
* [conn.php](./conn.php)连接不到，原因是有个MariDB，查看mysql端口为3308，只需要在**localhost**后面添加一个**:3308**即可
* 乱码问题
    1. **show charset**指令查看支持的字符集，参考[here](https://blog.csdn.net/weixin_30340353/article/details/95181110?utm_medium=distribute.pc_relevant.none-task-blog-BlogCommendFromMachineLearnPai2-1.edu_weight&depth_1-utm_source=distribute.pc_relevant.none-task-blog-BlogCommendFromMachineLearnPai2-1.edu_weight)
    2. 修改表的字符支持为gb2312，指令**alter table <表名> character set gb2312;**，参考[here](https://blog.csdn.net/springsunss/article/details/70337915)
    3. 在[save_news.php](./save_news.php)添加一条**mysqli_query($conn, "set names utf8")**指令，这里很诡异，为什么不是gb2312?
## 需要用到的函数
* **mysqli_num_rows(result)** 函数返回结果集中行的数量
* **mysqli_fetch_assoc(result)** 函数从结果集中取得一行作为关联数组，该函数返回的字段名是区分大小写的。
* **mysqli_fetch_array(result, [option])** 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有