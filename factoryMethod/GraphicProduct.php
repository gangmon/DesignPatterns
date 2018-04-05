<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午5:59
 */
include_once "Product.php";
class GraphicProduct implements Product
{
    private $mfgProduct;

    public function getProperties()
    {
        $this->mfgProduct = "This is a graphic";
        return $this->mfgProduct;
    }
}
