<!DOCTYPE html>
<html>
<body>

<?php
// 1. Every statements end with a ';'.
echo "Hello World!";

// 2. Start with '//' for a single-line comment.

/* 3. Multiple-line comments.
这是
PHP 多行
注释
 */
?>
<hr/>
<?php
// 4. Start with a '$' to declare or access a variable.
$x = 5;
// 5. Variable name is case-sensitive.
$X = "6";
// 6. PHP will cast variables automatically.
$z = $x + $X;
echo $z;
?>
<hr/>
<?php
$x = 5; // 全局变量

function myTest()
{
    $y = 10; // 局部变量
    echo "<p>测试函数内变量:<p>";
    echo "变量 x 为: $x"; // It has to be accessed by using 'global' to declare in the function.
    echo "<br>";
    echo "变量 y 为: $y";
}

myTest();

echo "<p>测试函数外变量:<p>";
echo "变量 x 为: $x";
echo "<br>";
echo "变量 y 为: $y";
?>
<hr/>
<?php
function myStaticVar()
{
    static $x = 0; // Use 'static' to turn a local variable to be static and could be accessed again in the function.
    echo $x;
    $x++;
    echo PHP_EOL; // 换行符
}

myStaticVar();
myStaticVar();
myStaticVar();
?>
<hr/>
<?php
// Use parameter to pass value into the function.
function myFunc($x)
{
    echo $x;
}
myFunc(5);
?>

</body>
</html>