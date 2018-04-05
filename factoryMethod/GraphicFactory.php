<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午5:59
 */

include_once "Creater.php";
include_once "GraphicProduct.php";
class GraphicFactory extends Creater
{
    protected function factoryMethod()
    {
        $product = new GraphicProduct();
        return $product->getProperties();
    }
}