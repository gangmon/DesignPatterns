<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/3/28
 * Time: 上午7:45
 */

abstract class Creater
{

    protected abstract function factoryMethod();
//    startFactory 返回一个product，startFactory希望由factoryMethod（）返回一个产品对象
//所以factoryMethod（） 的具体实现要构建并返回由一个按接口实现的产品对象
    public function startFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}

//工厂方法设计模式中第二个接口是的Product
//由于这是第一个实现，也是最简单的实现，所有的文本和图像属性都只实现一个方法getProperties（）
//Product.php
interface Product
{
    public function getProperties();
}

//TextProDuctt.php
class TextProduct implements  Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "this is text";
        return $this->mfgProduct;
    }
}

/**
 * 有两个具体工厂类拓展了Create，实现了factoryMethod方法
 * factoryMethod（）实现通过一个Product方法（getProperties()）返回一个文本或图像产品。
 */
class  TextFactory extends Creater
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return $product->getProperties();
    }
}

class GraphicFactory extends Creater
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return $product->getProperties();
    }
}

class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "This is a graphic";
        return $this->mfgProduct;
    }
}

/**
 * 客户
 * 我们并不希望Client类做出请求。实际上我们希望能够通过Creater接口做出请求。
 * 这样一来，如果以后我们增加了产品，或者工厂，即客户可以做同样的请求得到更多的产品类型，而不会破坏这个应用。
 */
//Client.php
//include_once('GraphicFactory');
//include_once('TextFactory');
class Client
{
    private $someGraphicObject;
    private $someTextObject;
    public function __construct()
    {
        $this->someGraphicObject = new GraphicFactory();
        echo $this->someGraphicObject->startFactory()."\n";
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory()."\n";
    }
}

$worker = new Client();
