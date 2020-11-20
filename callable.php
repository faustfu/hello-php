<?php
// 1. Callable is a type, includes functions, class methods, or objects implementing method:__invoke.
function show()
{
    echo 'hi', '<br/>';
}

// Use function:call_user_func to call a function by function name.
call_user_func('show');
?>
<hr/>
<?php
class MyClass
{
    public static function myStaticMethod()
    {
        echo 'Hello Static World!', '<br/>';
    }

    public function myMethod()
    {
        echo 'Hello World!', '<br/>';
    }
}
// Use function:call_user_func to call a function by class and method name.
call_user_func(array('MyClass', 'myStaticMethod'));
call_user_func('MyClass::myStaticMethod');

$obj = new MyClass();
call_user_func(array($obj, 'myMethod'));

?>
<hr/>
<?php
class C
{
    public function __invoke($name)
    {
        echo 'Hello ', $name, "<br/>";
    }
}

$c = new C();
call_user_func($c, 'PHP!');
$c('Hi');
?>
<hr/>
<?php
// Our closure
$double = function ($a) {
    return $a * 2;
};

// This is our range of numbers
$numbers = range(1, 5);

// Use the closure as a callback here to
// double the size of each element in our
// range
$new_numbers = array_map($double, $numbers);

print implode(' ', $new_numbers);
print_r($new_numbers);
?>