<?php
// 错误处理函数
function customError($errno, $errstr, $file, $line)
{
    echo "<b>Error:</b> [$errno] $errstr in #$line of $file<br>";
    echo "脚本结束";
    die();
}

// 針對錯誤等級，设置错误处理函数
set_error_handler("customError", E_USER_WARNING);

// 触发错误
$test = 2;
if ($test > 1) {
    trigger_error("变量值必须小于等于 1", E_USER_WARNING);
}
