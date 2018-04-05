<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午11:52
 */

include_once "creator.php";
include_once "product.php";

class CountryFactory extends Creator
{
    private $country;

    protected function factoryMethod(Product $product)
    {
        $this->country = $product;
        return ($this->country->getProperties());
    }
}