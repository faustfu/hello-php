<html>
<body>

<?php
for ($i = 1; $i <= 5; $i++) {
    echo "数字为 " . $i . "<br>";
}
?>
<hr/>
<?php
$x = array("Google", "Runoob", "Taobao");
foreach ($x as $value) {
    echo $value . "<br>";
}
?>
<hr/>
<?php
$x = array(1 => "Google", 2 => "Runoob", 3 => "Taobao");
foreach ($x as $key => $value) {
    echo "key  为 " . $key . "，对应的 value 为 " . $value . "<br>";
}
?>

</body>
</html>