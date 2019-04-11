<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
$myfile =fopen("file.txt","r")or die("open file!");
echo fread($myfile,filesize("file.txt"));

echo "<hr>";
var_dump($myfile);
echo "<hr>";
$myfile =fopen("file.txt","r")or die("open file!");
echo fgets($myfile);
echo "<hr>";
fclose($myfile);

$output = fopen("file_output.txt", "w") or die("Unable to open file!");
$txt = "Hello Kitty\n";
fwrite($output,$txt);
fclose($output);

?>
</body>
</html>