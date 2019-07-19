<?php
class Car{
	var $size;
	var $color;
	function Car($size="big"){
	$this->size=$size;	
	}
	function what_size(){
	return $this->size;
	}
}
$mycar=new Car();
#echo $mycar->what_size();
echo "<br>";
$mycar->color='green';
echo var_dump($mycar);
echo "<br>";
echo serialize($mycar);



class kitty{
	var $age;
	function Car($age="18"){
	$this->size=$size;	
	}
}
echo "<br>";
$seriStr='O:5:"kitty":1:{s:3:"age";s:2:"18";}';
#echo var_dump($seriStr);
echo "<br>";
$new_me=unserialize($seriStr);
echo var_dump($new_me);
echo "<br>";
echo $new_me->age;


?>