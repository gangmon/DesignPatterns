<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 下午7:18
 */

include_once "IPrototype.php";
class MaleProto extends IPrototype
{
    const gender = "MALE";
    public $mated;

    public function __construct()
    {
        $this->eyeColor = "red";
        $this->wingBeat = "220";
        $this->unitEyes = "760";
    }
    function __clone(){}
}