<?php
// String in PHP is a byte list with a length declaration.
$txt = "Hello world!";
echo $txt;
?>
<hr/>
<?php
$txt1 = "Hello world!";
$txt2 = "What a nice day!";
echo $txt1 . " " . $txt2; // Concat strings by '.'.
?>
<hr/>
<?php
// Use function:strlen to count bytes of a string.
echo strlen("一1二三");
?>
<hr/>
<?php
// Use function:strpos to locate a word in a string. It will return False if not found.
echo strpos("Hello world!", "world");
?>
