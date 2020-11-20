<?php
/*
PHP 对属性或方法的访问控制，是通过在前面添加关键字 public（公有），protected（受保护）或 private（私有）来实现的。

public（公有）：公有的类成员可以在任何地方被访问。
protected（受保护）：受保护的类成员则可以被其自身以及其子类和父类访问。
private（私有）：私有的类成员则只能被其定义所在的类访问。
 */
class Site
{
    /* 成员变量 */
    public $url;
    public $title;
    const uri = 'http://';

    public function __construct($par1, $par2)
    {
        $this->url = $par1;
        $this->title = $par2;
    }

    /* 成员函数 */
    public function setUrl($par)
    {
        $this->url = $par;
    }

    public function getUrl()
    {
        echo self::uri . $this->url . '<br/>';
    }

    public function setTitle($par)
    {
        $this->title = $par;
    }

    public function getTitle()
    {
        echo $this->title . '<br/>';
    }
}

$runoob = new Site('www.runoob.com', '菜鸟教程');
$taobao = new Site('www.taobao.com', '淘宝');
$google = new Site('www.google.com', 'Google 搜索');

// 调用成员函数，获取标题和URL
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();
?>
<hr/>
<?php
// 子类扩展站点类别
class Child_Site extends Site
{
    public $category; // New child property

    public function setCate($par)
    {
        $this->category = $par;
    }

    public function getCate()
    {
        echo $this->category . '<br/>';
    }

    public function getTitle()
    {
        echo $this->title . ' from child site<br/>'; // Override parent's method.
    }
}

echo 'uri = ' . Site::uri . '<br/>'; // Access class constant directly.


$qoo = new Child_Site('www.qoo.com', 'QOO');
$qoo->setCate('Drink');

$qoo->getTitle();
$qoo->getUrl();
$qoo->getCate();

?>
