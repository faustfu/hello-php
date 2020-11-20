<?php
// 严格模式
/*
Possible parameter type:
  int
  float
  bool
  string
  interfaces
  array
  callable
*/
declare (strict_types = 1);

function sum(int...$ints)
{
    return array_sum($ints);
}

print(sum(2, 3, 4));
?>
<hr/>
<?php
/*
Possible returning type:
  int
  float
  bool
  string
  interfaces
  array
  callable
  void
*/
function returnIntValue(int $value): int
{
    return $value + 1;
}

print(returnIntValue(5));
?>
<hr/>
<?php
function swap(&$left, &$right): void
{
    if ($left === $right) {
        return;
    }

    $tmp = $left;
    $left = $right;
    $right = $tmp;
}

$a = 1;
$b = 2;
var_dump(swap($a, $b), $a, $b);
?>
