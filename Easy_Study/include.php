<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>
<h1>这里是文件包含demo</h1>
<hr>
<?php include 'include_footer.php';?>
<hr>
<?php require 'include_footer.php';?>
<?php
include 'include_footer.php';
echo "我有一辆" . $color . $car ."。";
//include 与 require 有一个巨大的差异：如果用 include 语句引用某个文件并且 PHP 无法找到它，脚本会继续执行：
//如果我们使用 require 语句完成相同的案例，echo 语句不会继续执行，因为在 require 语句返回严重错误之后脚本就会终止执行：
?>
</body>
</html>