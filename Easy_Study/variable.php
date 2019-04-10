<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
/*
$x=5;
$y=6;
$z=$x+$y;
echo $z;
$txt="Hello Kitty";
*/
?>
<?php
$x=5;
function myTest(){
    $y=10;
    echo "<p>局部变量</p>";
    echo "变量x是：$x";
    echo "<br>";
    echo "变量 y 是：$y";
}
myTest();

echo "<p>测试函数之外的变量：</p>";
echo "变量 x 是：$x";
echo "<br>";
echo "变量 y 是：$y";
?>
<h1>全局和局部</h1>
<?php
$x=10;
$y=20;
function globalTest(){
    global $x,$y;
    $y=$x+$y;
}
//等同
function globalTest2(){
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}
globalTest2();
echo "加法之后的y是：$y";

echo "<h1>现在是static</h1>";
//static
function staticTest(){
    static $x=0;
    $x++;
    echo "X: $x <br >";
}
staticTest();
staticTest();
staticTest();
?>
</body>
</html>