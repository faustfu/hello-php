<?php
class A
{
    private $x = 1;
}

// PHP 7 之前版本定义闭包函数代码
$getXCB = function () {
    return $this->x;
};

// 闭包函数绑定到某一實例
$getX = $getXCB->bindTo(new A, 'A');

echo $getX(), '<br/>';

// PHP 7+ 代码, 不需再指定物件名稱
$getX = function () {
    return $this->x;
};
echo $getX->call(new A), '<br/>';
