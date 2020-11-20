<?php
// Use function:array to create an array of sth.
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br/>";
// Use function:count to get length of an array.
echo count($cars), '<br/>';
// Use for loop to iterate an array.
for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x], "<br>";
}

// Associated array
// Types of key could be string or integer.
// Types of value could be any types.
$age = array("Peter" => "35", "Ben" => "137", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old.<br/>";
// use foreach loop to iterate an associated array.
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value, '<br/>';
}

// Use function:sort/rsort to sort an array by values.
sort($cars);
for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x], "<br>";
}

$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
for ($x = 0; $x < count($numbers); $x++) {
    echo $numbers[$x], "<br>";
}

rsort($cars);
for ($x = 0; $x < count($cars); $x++) {
    echo $cars[$x], "<br>";
}

// Use function:asort/arsort to sort an associated array by values.
asort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value, '<br/>';
}

// Use function:ksort/krsort to sort an associated array by keys.
ksort($age);
foreach ($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value, '<br/>';
}
