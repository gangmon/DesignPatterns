<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午5:57
 */
/**
 * 有两个具体工厂类拓展了Create，实现了factoryMethod方法
 * factoryMethod（）实现通过一个Product方法（getProperties()）返回一个文本或图像产品。
 */
include_once "Creater.php";
include_once "TextProduct.php";
class  TextFactory extends Creater
{
    protected function factoryMethod()
    {
        $product = new TextProduct();
        return $product->getProperties();
    }
}