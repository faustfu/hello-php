<?php
// GLOBALS is a global associated array for normal usage.
$x = 75;
$y = 25;

function addition()
{
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}

addition();
echo $z, '<br/>';
?>
<hr/>
<?php
// _SERVER is a global associated array provided by the server to disclose its info.
echo $_SERVER['PHP_SELF'], '<br/>';
echo $_SERVER['SERVER_NAME'], '<br/>';
echo $_SERVER['HTTP_HOST'], '<br/>';
echo $_SERVER['HTTP_USER_AGENT'], '<br/>';
echo $_SERVER['SCRIPT_NAME'], '<br/>';
echo $_SERVER['REQUEST_METHOD'], '<br/>';
?>