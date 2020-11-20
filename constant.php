<?php
// Constants are immutable, case-sensitive and naming without '$'.
// System predefined constants
namespace MyProject;

echo '命名空间为："', __NAMESPACE__, '"'; // 输出 "MyProject"
?>
<hr/>
<?php
// __LINE__: show current line number in the script.
echo '这是第 " ' . __LINE__ . ' " 行';
?>
<hr/>
<?php
// __LINE__: show file name of the script.
echo '该文件位于 " ' . __FILE__ . ' " ';
?>
<hr/>
<?php
// __LINE__: show folder name of the script. == dirname(__FILE__)
echo '该文件位于 " ' . __DIR__ . ' " ';
?>
<hr/>
<?php
// __FUNCTION__: show current function name.
function test()
{
    echo '函数名为：' . __FUNCTION__;
}
test();
?>
<hr/>
<?php
// __CLASS__: show current class name.
class Test
{
    public function _print()
    {
        echo '类名为：' . __CLASS__ . "<br>";
        echo '函数名为：' . __FUNCTION__;
    }
}
$t = new Test();
$t->_print();
?>
<hr/>
<?php
// __TRAIT__: show current trait name.
// __METHOD__: show current method name of a class or trait.
class Base
{
    public function sayHello()
    {
        echo 'Hello ' . "<br>";
        echo __METHOD__ . "<br>";
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo __TRAIT__ . "<br>";
        echo __METHOD__ . "<br>";
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$o = new MyHelloWorld();
$o->sayHello();
?>
<hr/>
<?php
// User defined constants
// 区分大小写的常量名
define("greeting", "Huh?");
define("GREETING", "欢迎访问 Runoob.com");
echo GREETING;
echo '<br>';
echo greeting;
?>
<hr/>
<?php
// Constants could be accessed globally.
define("WELCOME", "欢迎访问 Runoob.com");

function myTest()
{
    echo WELCOME;
}

myTest();
?>
