<?php
// Simple function
function writeName1()
{
    echo "Kai Jim Refsnes";
}

echo "My name is ";
writeName1();
?>
<hr/>
<?php
// Function with parameters
function writeName2($fname, $punctuation)
{
    echo $fname . " Refsnes" . $punctuation . "<br>";
}

echo "My name is ";
writeName2("Kai Jim", ".");
echo "My sister's name is ";
writeName2("Hege", "!");
echo "My brother's name is ";
writeName2("Ståle", "?");
?>
<hr/>
<?php
// Functoin with returning value.
function add($x, $y)
{
    $total = $x + $y;
    return $total;
}

echo "1 + 16 = " . add(1, 16);
?>