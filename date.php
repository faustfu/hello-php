<?php
echo date("Y/m/d") , "<br>";
echo date("Y-m-d H:i:s e"), "<br>";
$a = new DateTime();
echo $a->format('Y-m-d H:i:s.u e') , "<br>";
