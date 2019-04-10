<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
class Car{
    var $size;
    var $color;
    function Car($color="green") {
      $this->color = $color;
    }
 
    function what_color(){
        return $this->color;
    }
}
$mycar=new Car("kitty");
$color=$mycar->what_color();
echo $color;
echo "<br>";
echo var_dump($mycar);
?>
</body>
</html>