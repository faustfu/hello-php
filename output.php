<?php
echo "<h2>PHP 很有趣!</h2>"; // Export text with html tags.
echo "Hello world!<br>";
echo "我要学 PHP!<br>";
echo "这是一个", "字符串，", "使用了", "多个", "参数。"; // Echo could take a series of parameters.
 ?>
<hr/>
<?php
$txt1 = "学习 PHP";
$txt2 = "RUNOOB.COM";
$cars = array("Volvo", "BMW", "Toyota");

echo $txt1;
echo "<br>";
echo "在 $txt2 学习 PHP ";
echo "<br>";
echo "我车的品牌是 {$cars[0]}";
?>
<hr/>
<?php
print "<h2>PHP 很有趣!</h2>"; // 'echo' and 'print' are similar, but print could only take one parameter.
print "Hello world!<br>";
print "我要学习 PHP!";
?>
<hr/>
<?php
$txt1 = "学习 PHP";
$txt2 = "RUNOOB.COM";
$cars = array("Volvo", "BMW", "Toyota");

print $txt1;
print "<br>";
print "在 $txt2 学习 PHP ";
print "<br>";
print "我车的品牌是 {$cars[0]}";
?>
<hr/>
<?php
// EOF is capticalize and ends with '<<<'
echo <<<EOF
        <h1>我的第一个标题</h1>
        <p>我的第一个段落。</p>
EOF;// EOF is capticalize and ends with ';'
// 结束需要独立一行且前后不能空格
 ?>
<hr/>
<?php
$name = "runoob";
// Variables could be evaluated in EOF block.
$a = <<<EOF
        "abc"$name
        "123"
EOF;
// 结束需要独立一行且前后不能空格
echo $a;
?>