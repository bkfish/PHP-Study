<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
$x=17;
$y="17";
var_dump($x==$y);
echo "<br>";
var_dump($x===$y);
echo "<br>";

var_dump($x!=$y);
echo "<br>";
//$x !== $y	如果 $x 不等于 $y，或它们类型不相同，则返回 true。
var_dump($x!==$y);
echo "<br>";

//PHP 数组运算符
//$x == $y	如果 $x 和 $y 拥有相同的键/值对，则返回 true。
$x = array("a" => "17", "b" => "peach"); 
$y = array("a" => 17, "b" => "peach"); 
$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
//!= 和<>都是不相等	$x <> $y如果 $x 不等于 $y，则返回 true。
?>
</body>
</html>