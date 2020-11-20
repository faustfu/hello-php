<?php
// Array could be multiple dimensions.
$cars = array
    (
    array("Volvo", 100, 96),
    array("BMW", 60, 59),
    array("Toyota", 110, 100),
);

foreach ($cars as $car) {
    echo "Name=" . $car[0] . ", Max=" . $car[1] . ", Min=" . $car[2], '<br/>';
}
?>
<hr/>
<?php
$sites = array
    (
    "runoob" => array
    (
        "菜鸟教程",
        "http://www.runoob.com",
    ),
    "google" => array
    (
        "Google 搜索",
        "http://www.google.com",
    ),
    "taobao" => array
    (
        "淘宝",
        "http://www.taobao.com",
    ),
);
print("<pre>"); // 格式化输出数组
print_r($sites);
print("</pre>");
?>