<?php
$x = 10;
$y = 6;
echo ($x + $y); // 输出16
echo '<br>';

echo ($x - $y); // 输出4
echo '<br>';

echo ($x * $y); // 输出60
echo '<br>';

echo ($x / $y); // 输出1.6666666666667
echo '<br>';

echo intdiv($x, $y); // 输出1
echo '<br>';

echo ($x % $y); // 输出4
echo '<br>';

echo -$x;
?>
<hr/>
<?php
$x = 10;
echo $x; // 输出10
echo '<br>';

$y = 20;
$y += 100;
echo $y; // 输出120
echo '<br>';

$z = 50;
$z -= 25;
echo $z; // 输出25
echo '<br>';

$i = 5;
$i *= 6;
echo $i; // 输出30
echo '<br>';

$j = 10;
$j /= 5;
echo $j; // 输出2
echo '<br>';

$k = 15;
$k %= 4;
echo $k; // 输出3
echo '<br>';

$x = "Hello";
$x .= " world!";
echo $x; // 输出Hello world!
?>
<hr/>
<?php
$x = 10;
echo ++$x; // 输出11
echo '<br>';

$y = 10;
echo $y++; // 输出10
echo '<br>';

$z = 5;
echo --$z; // 输出4
echo '<br>';

$i = 5;
echo $i--; // 输出5
?>
<hr/>
<?php
$x = 100;
$y = "100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a = 50;
$b = 90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
?>
<hr/>
<?php
// Array operators
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
$z = $x + $y; // $x 和 $y 数组合并
var_dump($z);
echo "<br>";

var_dump($x == $y);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x !== $y);
?>
<hr/>
<?php
// 三元运算符 ?:
$test = '菜鸟教程';
// 普通写法
$username = isset($test) ? $test : 'nobody';
echo $username, "<br>";

// PHP 5.3+ 版本写法
$username = $test ?: 'nobody';
echo $username, "<br>";
?>
<hr/>
<?php
// NULL三元运算符(PHP7+) ??
// 如果 $_GET['user'] 不存在返回 'nobody'，否则返回 $_GET['user'] 的值
$username = $_GET['user'] ?? 'nobody';
// 类似的三元运算符
$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';
?>
<hr/>
<?php
// 组合比较符(PHP7+) <=>
// 整型
echo 1 <=> 1, "<br>"; // 0
echo 1 <=> 2, "<br>"; // -1
echo 2 <=> 1, "<br>"; // 1

// 浮点型
echo 1.5 <=> 1.5, "<br>"; // 0
echo 1.5 <=> 2.5, "<br>"; // -1
echo 2.5 <=> 1.5, "<br>"; // 1

// 字符串
echo "a" <=> "a", "<br>"; // 0
echo "a" <=> "b", "<br>"; // -1
echo "b" <=> "a", "<br>"; // 1
 ?>