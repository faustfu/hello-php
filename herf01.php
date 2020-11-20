<html>
<body>

<a href="<?php echo $_SERVER['PHP_SELF'], "?subject=PHP&web=runoob.com"; ?>">Test $GET</a>

<?php 
echo "Study " . $_GET['subject'] . " @ " . $_GET['web'];
?>
</body>
</html>