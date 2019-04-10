<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
//PHP 全局变量 - 超全局变量
//$_SERVER 这种超全局变量保存关于报头、路径和脚本位置的信息。
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<hr>";

?>

<form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
Name:<input type="text" name="fname">
<input type="submit">
</form>

<?php
$name= $_REQUEST['fname'];
echo $name;
?>
</body>
</html>
