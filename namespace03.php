<?php
// Global namespace '/' could be accessed anywhere.
namespace Foo;

function strlen()
{}

const INI_ALL = 3;

class Exception
{}

echo \strlen('hi'), '<br/>'; // 调用全局函数strlen
echo \INI_ALL, '<br/>'; // 访问全局常量 INI_ALL
echo new \Exception('Global Error'), '<br/>'; // 实例化全局类 Exception
