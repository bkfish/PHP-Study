<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>


<form method="post" action="<?php $_SERVER["PHP_SELF"];?>">
</form>
<?php
echo $_SERVER['PHP_SELF'];
echo "敢不敢加上/%22%3E%3Cscript%3Ealert('hacked')%3C/script%3E";
echo "<hr>";
echo htmlspecialchars($_SERVER["PHP_SELF"]);
//htmlspecialchars解决问题
//<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); 
?>



</body>
</html>