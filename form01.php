<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
Name: <input type="text" name="fname">
<input type="submit">
</form>

<?php
// Use function:htmlspecialchars to trim special characters for security.
// Use function:empty to check if the value is empty.
// Use function:preg_match for validation.
$name = htmlspecialchars($_REQUEST['fname']); // $name = $_POST['fname']; 
echo $name;
?>

</body>
</html>