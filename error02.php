<?php
// Use function:set_error_handler to register an error handler.
function customError($errno, $errstr)
{
    echo "<b>Error:</b> [$errno] $errstr<br>";
    echo "脚本结束";
    die();
}

// 设置错误处理函数
set_error_handler("customError");

// 触发错误
echo ($test);
