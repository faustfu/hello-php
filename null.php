<?php
/*
NULL 是一種類型。
特殊的 NULL 值表示一个变量没有值。NULL 类型唯一可能的值就是 NULL。

在下列情况下一个变量被认为是 NULL：
  1. 被赋值为 NULL。
  2. 尚未被赋值。
  3. 被 unset()。
*/

$var = NULL;
// Use function:is_null to validate if a variable is null.
if (is_null($var)) {
  echo '$var is null!<br/>';
} else {
  echo '$var is not null!<br/>';
}
?>