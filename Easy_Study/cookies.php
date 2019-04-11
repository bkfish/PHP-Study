<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
setcookie("User","Kitty",time()+3600);
echo "<hr>";
print_r($_COOKIE);
?>
<hr>
<?php
 if(isset($_COOKIE["User"]))
 echo "Welcome " . $_COOKIE["User"] . "!<br />";
 else
   echo "Welcome guest!<br />";
?>
<hr>
<?php
session_start();

if(isset($_SESSION['views']))
  $_SESSION['views']=$_SESSION['views']+1;

else
  $_SESSION['views']=1;
echo "Views=". $_SESSION['views'];
if($_SESSION['views']>=10)
unset($_SESSION['views']);

?>
</body>
</html>