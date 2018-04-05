<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午5:58
 */
include_once "Product.php";
class TextProduct implements  Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "this is text";
        return $this->mfgProduct;
    }
}