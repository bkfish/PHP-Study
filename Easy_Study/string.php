<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<body>

<?php
//返回长度
echo strlen("Hello Kitty");
echo "<br>";
//对字符串中的单词计数
echo str_word_count("Hello Wolrd");
echo "<br>";
//反转字符串
echo strrev("Hello Kitty");
echo "<br>";

//strpos() 函数用于检索字符串内指定的字符或文本。字符串中首字符的位置是 0 而不是 1。
echo strpos("Hello Kitty","Kitty");
echo "<br>";

echo strpos("Hello World","Kitty"); //不输出

//PHP str_replace() 函数用一些字符串替换字符串中的另一些字符。
echo str_replace("world","kitty","Hello world! ");
echo "<br>";


?>
</body>
</html>