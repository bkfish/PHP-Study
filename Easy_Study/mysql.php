<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
$con=mysql_connect("localhost","root","liu19990808");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("wj2",$con);
$result=mysql_query("select * from staff");
var_dump($result);
echo "<hr>";
while($row=mysql_fetch_array($result))
{
    echo $row['name']." ".$row['birthday'];
    echo "<br>";
}
mysql_close($con);
?>
</body>
</html>