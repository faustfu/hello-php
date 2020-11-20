<?php
ini_set('zend.assertions', 0); // 0: 生成代码，但在执行时跳过它

assert(true == false);
echo 'Hi!', '<br/>';
?>
<hr/>
<?php
ini_set('zend.assertions', 1); // 1: 生成和执行代码 (开发模式), -1: 不生成代码 (生产环境)
ini_set('assert.exception', 1); // 1: 断言失败时抛出例外, 0: 断言失败时警告

assert(true == false);
echo 'Hi!';
?>