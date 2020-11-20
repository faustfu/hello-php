<html>
<body>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']), "?email=anonymous@gmail.com&age=123&name=Adam"; ?>">Test GET Filter</a>
<hr/>
<?php
// Use function:filter_var_array/filter_input_array to validate variables with rules.
$filters = array
(
    "name" => array
    (
        "filter"=>FILTER_SANITIZE_STRING
    ),
    "age" => array
    (
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array
        (
            "min_range"=>1,
            "max_range"=>120
        )
    ),
    "email"=> FILTER_VALIDATE_EMAIL
);
 
$result = filter_input_array(INPUT_GET, $filters);
 
if (!$result["age"])
{
    echo("年龄必须在 1 到 120 之间。<br>");
}
elseif(!$result["email"])
{
    echo("E-Mail 不合法<br>");
}
else
{
    echo("输入正确");
}
?>
</body>
</html>