<?php
// Use function:filter_var with a customized rule to sanitize sth.
function convertSpace($string)
{
    return str_replace("_", ".", $string);
}

$string = "www_runoob_com!";

echo filter_var($string, FILTER_CALLBACK,
    array("options" => "convertSpace"));
