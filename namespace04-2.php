<?php
// When using dynamic naming, absolute namespace is required, otherwise the process will use global namespace.
namespace namespacename;

class Classname
{
    public function __construct()
    {
        echo __METHOD__, "<br/>";
    }
}
function funcname()
{
    echo __FUNCTION__, "<br/>";
}
const CONSTNAME = "namespaced";

include 'namespace04-1.php';

$a = 'Classname';
$obj = new $a; // 输出 Classname::__construct
$b = 'funcname';
$b(); // 输出函数名
echo constant('CONSTNAME'), "<br/>"; // 输出 gg

/* 如果使用双引号，使用方法为 "\\namespacename\\Classname"*/
$a = '\namespacename\Classname';
$obj = new $a; // 输出 namespacename\Classname::__construct
$a = 'namespacename\Classname';
$obj = new $a; // 输出 namespacename\Classname::__construct
$b = 'namespacename\funcname';
$b(); // 输出 namespacename\funcname
$b = '\namespacename\funcname';
$b(); // 输出 namespacename\funcname
echo constant('\namespacename\CONSTNAME'), "<br/>"; // 输出 namespaced
echo constant('namespacename\CONSTNAME'), "<br/>"; // 输出 namespaced
