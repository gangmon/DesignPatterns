<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/3/25
 * Time: 下午12:31
 */
//第一个设计模式原则；按接口而不是按实现来编程。p49
//通俗的将就是将变量设置为一个抽象类或接口数据类型饿的实例，而不是一个具体实现的实例。


//以下为解释按接口而不是按实例编程的原则
//

abstract class IAbstract
{
    //对所有实现都可用的属性
    protected $valueNow;

    //所有实现都必须包含以下两个方法
    //必须返回十进制
    abstract protected function giveCost();
    //must return string
    abstract protected function giveCity();
    //this function all child Class can use
    public function displayShow()
    {
        $stringCost = $this->giveCost();
        $stringCost = (string)$stringCost;
        $allTogether = ('cost:$'.$stringCost."for".$this->giveCity());
        return $allTogether;
    }
}
//NorthRegion.php

class  NorthRegion extends IAbstract
{
    protected function giveCost()
    {
        return 210.54;
        // TODO: Implement giveCost() method.
    }
    protected function giveCity()
    {
        return "Moose Breach";
        // TODO: Implement giveCity() method.
    }
}

//WestRegion.php
class WestRegion extends IAbstract
{
    protected function giveCost()
    {
        $solarSaves = 2;
        $this->valueNow = 210.54 / $solarSaves;
        return $this->valueNow;
        // TODO: Implement giveCost() method.
    }

    protected function giveCity()
    {
        return "Ratasnik";
    }


}
class Client
{
    public function __construct()
    {
        $north = new NorthRegion();
        $west = new WestRegion();
        $this->showInterface($north);
        $this->showInterface($west);
    }
    public function showInterface(IAbstract $region)
    {
        echo $region->displayShow()."<br/>";
    }

}
$worker = new Client();

//第二个实现原则是：优先使用对象组合而不是类继承
//以下为类继承代码
//以下为一个简单的父类，实现加法和除法
class DoMath
{
    private $num;
    private $quotient;

    public function simpleAdd($first,$second)
    {
        $this->num = ($first + $second);
        return $this->num;
    }
    public function simpleDivide($divided,$divisor)
    {
        $this-> quotient = ($divided/$divisor);
        return $this->quotient;
    }
}
//这个类增加文本功能，将数字转化为字符串，通过拓展这个类继承类DoMath所有的功能
class InheritMath extends DoMath
{
    private $textOut;
    private $fullFace;

    public function numToText()
    {
        $this->textOut = (string)$num;
        return $this->textOut;
    }
    public function addFace($face,$msg)
    {
        $this->fullFace = "<strong>".$face."</strong>".$msg;
        return $this->fullFace;
    }
}
//Clinet1  类实例化InheritMath类，不仅能够使用DoMath的所有功能，也能够使用InheritMath所有的功能
class Client1
{
    private $added;
    private $divided;
    private $textNum;
    private $output;
    public function __construct()
    {
        $useMath = new DoMath();
        $useText = new InheritMath();
        $this->added = $useMath->simpleAdd(40,60);
        $this->divided = $useText->simpleDivide($this->added,25);//这里就体现出类继承的特点
        $this->textNum = $useText->numToText($this->divided);
        $this->output = $useText->addFace("your result is:",$this->textNum);
    }
}
