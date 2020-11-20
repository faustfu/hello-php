<?php
// Append new info to cookies.
$expire = time() + 60 * 60 * 24 * 30;
setcookie("user", "runoob", $expire);
?>
<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php
// Get cookie info from global variable:_COOKIE.
if (isset($_COOKIE["user"])) {
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
} else {
    echo "普通访客!<br>";
}

// Expire cookie info
setcookie("user", "", time()-3600);
?>

</body>
</html>