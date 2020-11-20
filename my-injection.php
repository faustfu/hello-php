<?php
$dbhost = 'localhost:3306'; // mysql服务器主机地址
$dbuser = 'root'; // mysql用户名
$dbpass = 'example'; // mysql用户名密码

$conn = mysqli_connect($dbhost, $dbuser, $dbpass);
if (!$conn) {
    die('连接失败: ' . mysqli_error($conn));
}
echo '连接成功<br />';

// 设置编码，防止中文乱码
mysqli_query($conn, "set names utf8");

mysqli_select_db($conn, 'RUNOOB');

// Use function:mysqli_real_escape_string to replace illegal characters.
$runoob_title = "' OR '1'='1";
$runoob_title = mysqli_real_escape_string($conn, $runoob_title);
echo "runoob_title = $runoob_title", '<br/>';

// Query
$sql = "SELECT runoob_id, runoob_title,
        runoob_author, submission_date
        FROM runoob_tbl
        WHERE runoob_title LIKE '$runoob_title'";

$retval = mysqli_query($conn, $sql);
if (!$retval) {
    die('无法读取数据: ' . mysqli_error($conn));
}

// By column name
echo '<h2>菜鸟教程 mysqli_fetch_array 测试</h2>';
echo '<table border="1"><tr><td>教程 ID</td><td>标题</td><td>作者</td><td>提交日期</td></tr>';
while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
    echo "<tr><td> {$row['runoob_id']}</td> " .
        "<td>{$row['runoob_title']} </td> " .
        "<td>{$row['runoob_author']} </td> " .
        "<td>{$row['submission_date']} </td> " .
        "</tr>";
}
echo '</table>';


mysqli_free_result($retval);

mysqli_close($conn);
