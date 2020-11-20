<?php
// Static variables of class.
class Foo
{
    public static $my_static = 'foo';

    public function staticValue()
    {
        return self::$my_static;
    }
}

print Foo::$my_static . '<br/>';

$foo = new Foo();
print $foo->staticValue() . '<br/>';
?>
<hr/>
<?php
// Use 'final' to avoid overriding by child class.
class BaseClass {
   public function test() {
       echo "BaseClass::test() called" . '<br/>';
   }
   
   final public function moreTesting() {
       echo "BaseClass::moreTesting() called"  . '<br/>';
   }
}

class ChildClass extends BaseClass {
   public function test() {
       echo "ChildClass::test() called"  . '<br/>';
   }
}
// 报错信息 Fatal error: Cannot override final method BaseClass::moreTesting()
?>