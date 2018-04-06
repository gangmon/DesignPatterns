<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 上午2:45
 */
include_once "countryFactory.php";
include_once  "rowProduct.php";

class Client
{
    private $countryFactory;

    public function __construct()
    {
        $this->countryFactory = new CountryFactory();
        echo $this->countryFactory->doFactory(new rowProduct());
    }
}

$worker = new Client();
