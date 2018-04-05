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
        $this->mfgProduct = "<!doctype html><html><head><meta charset='UTF-8' />";
        $this->mfgProduct.= "<title>Map factory</title>";
        $this->mfgProduct.= "</head><body>
                                        <img src='haha.ico' width='100' height='100'>
                                    </body></html>";
        return $this->mfgProduct;
    }
}
