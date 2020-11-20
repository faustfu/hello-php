<html>
<body>

<?php
// Use function:file_exists to check if the file exists.
$file = fopen("welcome.txt", "r") or exit("无法打开文件!");
// 读取文件每一行，直到文件结尾
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);
?>
<hr/>
<?php
$file = fopen("welcome.txt", "r") or exit("无法打开文件!");
while (!feof($file)) {
    echo fgetc($file);
}
fclose($file);
?>
<hr/>
<?php
$fh = fopen("names.csv", "r"); //这里我们只是读取数据，所以采用只读打开文件流
$arr = fgetcsv($fh); //这个函数就是读取CSV文件的函数，他把文本读入后转为数组存储在$arr中
fclose($fh);
foreach ($arr as $key => $value) {echo $value . "<br>";} //循环输出所有的值
?>

</body>
</html>