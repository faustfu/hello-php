<?php
// String variables declare with '"' or "'" block.
$a = 'a';
// Double-quote string could use with variables.
$x = "Hello $a world!"; 
echo $x,"<br>";
// Single-quote string could be multiple lines.
$x = 'Hello a
world!';
echo $x,"<br>";
$x = <<<EOD
Example of string
spanning multiple lines
using $a "heredoc syntax".
EOD;
echo $x,"<br>";
$x = <<<'EOD'
Example of string
spanning multiple lines
using $a "nowdoc syntax".
EOD;
echo $x,"<br>";
if (is_string($x)) {
    echo '$x is a string','<br/>';
}
?>
<hr/>
<?php // Integer variables
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
echo "<br>";
$x = 0b11111111; // 二进制数
var_dump($x);
echo "<br>";
if (is_int($x)) {
    echo '$x is an integer','<br/>';
}
?>
<hr/>
<?php // Float variables
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
echo "<br>";
$x = NAN;
var_dump($x);
echo "<br>";
if (is_nan($x)) {
    echo '$x is an NAN','<br/>';
}
?>
<hr/>
<?php // Boolean variables: PHP will convert other types into boolean if needed.
$x = true;
var_dump($x);
echo "<br>";
$y = false;
var_dump($y);
echo "<br>";
?>
<hr/>
<?php // Array variables
$cars = array("Volvo", "BMW", "Toyota", "裕隆");
var_dump($cars);
?>
<hr/>
<?php // Null variables
$x = "Hello world!";
$x = null;
var_dump($x);
?>
<hr/>
<?php // Class variables
class Car
{
    public $color;
    public function __construct($color = "green")
    {
        $this->color = $color;
    }
    public function what_color()
    {
        return $this->color;
    }
}
$c = new Car("black");
echo $c->what_color(), "<br/>";
var_dump($c);
?>
<hr/>
<?php
if (42 == "42") {
    echo '1、值相等';
}
echo "<br/>";
if (42 === "42") {
    echo '2、类型相等';
} else {
    echo '3、不相等';
}
?>
<hr/>
<?php // '==' compares two values, '===' compares two typed values
echo '0 == false: ';
var_dump(0 == false);
echo '0 === false: ';
var_dump(0 === false);
echo "<br/>";
echo '0 == null: ';
var_dump(0 == null);
echo '0 === null: ';
var_dump(0 === null);
echo "<br/>";
echo 'false == null: ';
var_dump(false == null);
echo 'false === null: ';
var_dump(false === null);
echo "<br/>";
echo '"0" == false: ';
var_dump("0" == false);
echo '"0" === false: ';
var_dump("0" === false);
echo "<br/>";
echo '"0" == null: ';
var_dump("0" == null);
echo '"0" === null: ';
var_dump("0" === null);
echo "<br/>";
echo '"" == false: ';
var_dump("" == false);
echo '"" === false: ';
var_dump("" === false);
echo "<br/>";
echo '"" == null: ';
var_dump("" == null);
echo '"" === null: ';
var_dump("" === null);
?>
