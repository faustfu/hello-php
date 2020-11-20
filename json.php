<?php
// Use function:json_encode to convert an object to a json string.
$arr = array('runoob' => '菜鸟教程', 'taobao' => '淘宝网');
echo json_encode($arr), '<br/>';
echo json_encode($arr, JSON_UNESCAPED_UNICODE);
?>
<hr/>
<?php
class Emp
{
    public $name = "";
    public $hobbies = "";
    public $birthdate = "";
}
$e = new Emp();
$e->name = "sachin";
$e->hobbies = "sports";
$e->birthdate = date('m/d/Y h:i:s a', strtotime("8/5/1974 12:20:03"));

echo json_encode($e);
?>
<hr/>
<?php
// Use function:json_decode to convert a json string to an object.
$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
var_dump(json_decode($json, true));
?>