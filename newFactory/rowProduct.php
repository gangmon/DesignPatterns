<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 上午11:48
 */
include_once "product.php";
include_once "formatHelper.php";

class RowProduct implements Product
{
    private $mfgProduct;
    private $formatHelper;
    private $countryNow;

    public function getProperties()
    {
        // TODO: Implement getProperties() method.
        //从外部文本文件加载文本说明
        $this->countryNow = file_get_contents("outside.txt");
        $this->formatHelper = new FormatHelper();
        $this->mfgProduct = $this->formatHelper->addTop();
        $this->mfgProduct .= "<img src='../factoryMethod/haha.ico' class='pixRight' width='150' height='180'>";
        $this->mfgProduct .= "<header>Row</header>";
        $this->mfgProduct .= "<p>$this->countryNow</p>";
        $this->mfgProduct .= $this->formatHelper->closeUp();
        return $this->mfgProduct;
    }

}