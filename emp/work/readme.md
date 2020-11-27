# 遇到的问题
1. 使用url传多个值，需要使用&作为连接符号，错误示范文件[show_dept.php](./show_dept.php)具体参考[here](https://blog.csdn.net/Answer3664/article/details/79220750?utm_medium=distribute.pc_relevant.none-task-blog-OPENSEARCH-2.not_use_machine_learn_pai&depth_1-utm_source=distribute.pc_relevant.none-task-blog-OPENSEARCH-2.not_use_machine_learn_pai)
2. [mysqli_num_fileds](https://www.runoob.com/php/func-mysqli-num-fields.htmlhttps://www.runoob.com/php/func-mysqli-num-fields.html)返回字段中列数
3. 记得添加“'”在url传值中，否则传出来的值会非常奇怪
```html
<a href='del_dept.php?depto=$depto'>
```
4. 对齐表格
```html
<table align="center">
```
