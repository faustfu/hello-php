<?php
// 显示所有错误
error_reporting(E_ALL);

class beers
{
    const softdrink = 'rootbeer';
    public static $ale = 'ipa';
}

$rootbeer = 'A & W';
$ipa = 'Alexander Keith\'s';

// 有效，输出： I'd like an A & W
echo "I'd like an {${beers::softdrink}}<br/>";

// 也有效，输出： I'd like an Alexander Keith's
echo "I'd like an {${beers::$ale}}<br/>";
?>
<hr/>
<?php
// 取得字符串的第一个字符
$str = '這 is a test.';
$first = $str[0];
$last = $str[strlen($str)-1]; 
echo '$str = ', $str, '<br/>';
echo '$first = ', $first, '<br/>';
echo '$last = ', $last, '<br/>';
$str[strlen($str)-1] = '!';
echo '$str = ', $str, '<br/>';

// 取得字符串的第三个字符
$third = $str[2];

// 取得字符串的最后一个字符
$str = 'This is still a test.';
$last = $str[strlen($str) - 1];

// 修改字符串的最后一个字符
$str = 'Look at the sea';
$str[strlen($str) - 1] = 'e';
?>