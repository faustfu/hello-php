<?php
// Use "use" to make an alias of namespace or class.
namespace Sub {
    class Dog
    {
        function do() {
            echo 'Hi..', '<br/>';
        }
    }
}

namespace {
    use Sub as Ext; // Create namespace alias
    use Sub\Dog as Cat; // Create class alias

    $a = new Cat;
    $a->do();

    $b = new Ext\Dog;
    $b->do();

    $c = 'Sub\Dog'; // ?
    $d = new $c;
    $d->do();
}
