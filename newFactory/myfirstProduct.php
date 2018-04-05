<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 上午12:01
 */

include_once "formatHelper.php";
include_once "product.php";

class myfirstProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;

    public function getProperties()
    {
        // TODO: Implement getProperties() method.

        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct.=<<<MyFirst
    <img src="../factoryMethod/haha.ico" class="pixRight" width="100" height="124">
    <header>First</header>
    <p>blah blah</p>
MyFirst;
        $this->mfgProduct .=$this->formatHelper->closeUp();
        return $this->mfgProduct;
    }
}