<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 下午7:14
 */
abstract class IPrototype
{
    public $eyeColor;
    public $wingBeat;
    public $unitEyes;

    abstract function __clone();
}