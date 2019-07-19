<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>
<?php
 
$dir="./"; //指定的路径
$sitepath = '/study/';
//遍历文件夹下所有文件
if (false != ($handle = opendir ( $dir ))) {
    echo "$dir 目录下的文件列表：";
    echo "<br>";
    $i = 0;
    while (false !== ($file = readdir($handle))) {
        if ($file != "." && $file != ".." && !is_dir($dir.'/'.$file)) {
            echo '<a href="' . $sitepath . $file . '">'.$file. '</a>';
            echo "<br>";
        }
    }
    //关闭句柄
    closedir($handle);
}
 
?>
</body>
</html>