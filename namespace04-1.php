<?php
// Access objects dynamically.
class Classname
{
    public function __construct()
    {
        echo __METHOD__, "<br/>";
    }
}
function funcname()
{
    echo __FUNCTION__, "<br/>";
}
const CONSTNAME = "gg";

$a = 'Classname';
$obj = new $a; // prints Classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('CONSTNAME'), "<br/>"; // prints gg
