<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
date_default_timezone_set("Asia/Shanghai");
echo "今天是：".date("Y/m/d")."<br>";
echo "今天是：".date("Y.m.d")."<br>";
echo "今天是：".date("Y-m-d")."<br>";
echo "今天是：".date("1")."<br>";
echo "<br>";
$d=mktime(9, 12, 31, 6, 10, 2015);
echo "创建日期是 " . date("Y-m-d h:i:sa", $d);
?>
</body>
</html>