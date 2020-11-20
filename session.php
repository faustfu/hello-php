<?php
// Use function:session_start to initial sessions.
session_start();

// Use global variable:_SESSION to access sessions.
if (isset($_SESSION['views'])) {
    $_SESSION['views'] = $_SESSION['views'] + 1;
} else {
    $_SESSION['views'] = 1;
}
?>

<html>
<head>
<meta charset="utf-8">
<title>菜鸟教程(runoob.com)</title>
</head>
<body>

<?php
// 检索 session 数据
echo "浏览量：" . $_SESSION['views'];

// Use function:unset to destroy a session.
if (isset($_SESSION['views'])) {
    unset($_SESSION['views']);
}

// Use function:session_destroy to destroy all sessions.
session_destroy();
?>

</body>
</html>