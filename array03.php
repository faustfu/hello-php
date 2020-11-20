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

unset($arr[5]); // This removes the element from the array

// 重新索引：
$arr = array_values($arr);
$arr[] = 7;
print_r($arr);

unset($arr); // This deletes the whole array
?>
