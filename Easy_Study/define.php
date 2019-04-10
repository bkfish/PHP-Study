<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
//对大小写敏感的常量
define("GREETING", "Welcome to Kitty!");
echo GREETING;

echo "<br>";

//对大小写不敏感的常量
define("GRETTING","AHHA",true);
echo gretting;

//常量是自动全局的，而且可以贯穿整个脚本使用。
function myTest() {
    echo "<br>";
    echo gretting;
}
 
myTest();
?>
</body>
</html>