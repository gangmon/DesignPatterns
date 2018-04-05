<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 上午12:10
 */
class FormatHelper
{
    private $tpper;
    private $bottom;

    public function addTop()
    {
        $this->tpper="<!doctype html><html><head>
                                                <link rel='stylesheet' type='text/css' href='product.css'/>
                                                <meta charset='utf-8'>
                                                <title>Map Factory</title>
                                            </head><body>";
        return $this->tpper;
    }

    public function closeUp()
    {
        $this->bottom = "</body></html>";
        return $this->bottom;
    }


}
