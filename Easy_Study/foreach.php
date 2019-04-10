<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
for($x=0;$x<10;$x++)
echo "数字是: $x <br>";
echo "<hr>";

$colors=array("red","blue","green","yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}
echo "<hr>";
?>
</body>
</html>