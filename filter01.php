<?php
/*
有两种过滤器：

Validating 过滤器：
用于验证用户输入
严格的格式规则（比如 URL 或 E-Mail 验证）
如果成功则返回预期的类型，如果失败则返回 FALSE

Sanitizing 过滤器：
用于允许或禁止字符串中指定的字符
无数据格式规则
始终返回字符串
 */
// Use function:filter_var to validate a variable with a rule.
$int = 123;

if (!filter_var($int, FILTER_VALIDATE_INT)) {
    echo ("不是一个合法的整数");
} else {
    echo ("是个合法的整数");
}
?>
<hr/>
<?php
$var = 300;

$int_options = array(
    "options" => array
    (
        "min_range" => 0,
        "max_range" => 256,
    ),
);

if (!filter_var($var, FILTER_VALIDATE_INT, $int_options)) {
    echo ("不是一个合法的整数");
} else {
    echo ("是个合法的整数");
}
?>
