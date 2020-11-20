<?php
// Use function:random_bytes to generate random bytes.
$bytes = random_bytes(5);
print(bin2hex($bytes));
?>
<hr/>
<?php
// Use function:random_int to generate random integer.
print(random_int(100, 999));
print('<br/>');
print(random_int(-1000, 0));
?>