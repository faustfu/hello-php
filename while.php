<html>
<body>

<?php
$i = 1;
while ($i <= 5) {
    echo "The number is " . $i . "<br>";
    $i++;
}
?>
<hr/>
<?php
$i = 1;
do {
    $i++;
    echo "The number is " . $i . "<br>";
} while ($i <= 5);
?>

</body>
</html>