<?php
$dbhost = 'localhost:3306'; // mysql服务器主机地址
$dbuser = 'root'; // mysql用户名
$dbpass = 'example'; // mysql用户名密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('连接失败: ' . mysqli_error($conn));
}
echo '连接成功<br />';

$sql = "CREATE TABLE runoob_tbl( " .
    "runoob_id INT NOT NULL AUTO_INCREMENT, " .
    "runoob_title VARCHAR(100) NOT NULL, " .
    "runoob_author VARCHAR(40) NOT NULL, " .
    "submission_date DATE, " .
    "PRIMARY KEY ( runoob_id ))ENGINE=InnoDB DEFAULT CHARSET=utf8; "; // Create a table.
// $sql = "DROP TABLE runoob_tbl"; // Remove a table.

mysqli_select_db($conn, 'RUNOOB');

$retval = mysqli_query($conn, $sql);
if (!$retval) {
    echo '数据表创建失败: ' . mysqli_error($conn) . "<br />";
} else {
    echo "数据表创建成功" . "<br />";
}

$sql = 'SHOW DATABASES';
$retval = mysqli_query($conn, $sql);
while ($db = mysqli_fetch_object($retval)) {
    echo $db->Database . "<br />";
}

mysqli_close($conn);
