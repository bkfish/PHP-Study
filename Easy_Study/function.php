<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
function familyName($fname){
    echo "$fname zhang. <br>";
}
familyName("li");
familyName("zhang");
familyName("wu");
familyName("liu");
familyName("cao");

echo "<hr>";

//默认参数值
function sayHello($name="Kitty"){
    echo "Hello $name <br>";
}
sayHello("World!");
sayHello();

echo "<hr>";

//PHP 函数 - 返回值
function sum($x,$y) {
    $z=$x+$y;
    return $z;
  }
  
  echo "5 + 10 = " .sum(5,10) ."<br>";
  echo "7 + 13 = " .sum(7,13) ."<br>";

?>
</body>
</html>