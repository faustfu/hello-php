<?php
// Type:iterable could work with foreach.
function foo(iterable $iterable)
{
    foreach ($iterable as $value) {
        echo "$value<br/>";
    }
}

$a = [1, 2, 3, 'iterable variable'];
foo($a);
?>
<hr/>
<?php
function bar(): iterable
{
    return ['return iterator', 1, 2, 3];
}

foreach (bar() as $value) {
    echo "$value<br/>";
}
?>
<hr/>
<?php
function gen(): iterable
{
    yield 1;
    yield 2;
    yield 'return generator';
    yield 3;
}

foreach (gen() as $value) {
    echo "$value<br/>";
}

?>