<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午6:13
 */

//工厂方法设计模式中第二个接口是的Product
//由于这是第一个实现，也是最简单的实现，所有的文本和图像属性都只实现一个方法getProperties（）
//Product.php
interface Product
{
    public function getProperties();
}
