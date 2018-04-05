<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/5
 * Time: 下午5:55
 */
abstract class Creater
{

    protected abstract function factoryMethod();
//    startFactory 返回一个product，startFactory希望由factoryMethod（）返回一个产品对象
//所以factoryMethod（） 的具体实现要构建并返回由一个按接口实现的产品对象
    public function startFactory()
    {
        $mfg = $this->factoryMethod();
        return $mfg;
    }
}