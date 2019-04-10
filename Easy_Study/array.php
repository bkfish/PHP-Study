<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
$cars=array("Porsche","BMW","Volvo");
echo "I Like ". $cars[0] .", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";
//获得数组的长度 - count() 函数
echo "I have ".count($cars)." Cars";
echo "<br>";
//PHP 关联数组 关联数组是使用您分配给数组的指定键的数组。
$age=array("kitty"=>"20","Steve"=>"16","Elon"=>"17");

echo "Kitty is ".$age['Elon']." Years Old.";
echo "<hr>";
foreach ($age as $x => $x_value) {
    echo "Key= ".$x. ", Value=" . $x_value;
    echo "<br>";
}
//排序
//sort() - 以升序对数组排序
//rsort() - 以降序对数组排序
//asort() - 根据值，以升序对关联数组进行排序
//ksort() - 根据键，以升序对关联数组进行排序
//arsort() - 根据值，以降序对关联数组进行排序
//krsort() - 根据键，以降序对关联数组进行排序
?>
</body>
</html>