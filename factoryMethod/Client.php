<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午6:18
 */

/**
 * 客户
 * 我们并不希望Client类做出请求。实际上我们希望能够通过Creater接口做出请求。
 * 这样一来，如果以后我们增加了产品，或者工厂，即客户可以做同样的请求得到更多的产品类型，而不会破坏这个应用。
 */
//Client.php
include_once('GraphicFactory.php');
include_once('TextFactory.php');

class Client
{
    private $someGraphicObject;
    private $someTextObject;
    public function __construct()
    {
        $this->someGraphicObject = new GraphicFactory();
        echo $this->someGraphicObject->startFactory()."\n";
        $this->someTextObject = new TextFactory();
        echo $this->someTextObject->startFactory()."\n";
    }
}

$worker = new Client();