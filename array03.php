<?php
function getArray()
{
    return array(1, 2, 3);
}

// on PHP 5.4
$secondElement = getArray()[1];

// previously
$tmp = getArray();
$secondElement = $tmp[1];

// Use function:list to destruct an array.
list(, $secondElement) = getArray();
echo '$secondElement =', $secondElement, '<br/>';
?>
<hr/>
<?php
$arr = array(5 => 1, 12 => 2);

$arr[] = 56; // This is the same as $arr[13] = 56;
// at this point of the script

$arr["x"] = 42; // This adds a new element to
// the array with key "x"

// Use function:unset to remove elements from the array.
unset($arr[5]);

// 重新索引：
// Use function:array_values to get values from the array.
$arr = array_values($arr);
// Assign a value with key will generate a default key for the value.
$arr[] = 7;
print_r($arr);
echo '<br/>';

# Use operator:& to get reference of elements.
foreach($arr as &$row) {
    $row += 1;
}
print_r($arr);
echo '<br/>';

// Use function:unset to remove the whole array.
unset($arr);
print_r($arr);
?>
