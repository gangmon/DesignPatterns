<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 下午12:40
 */

abstract class CloneMe
{
    public $name;
    public $picture;

    abstract function __clone();
}

class Person extends CloneMe
{
    public function __construct()
    {
        $this->picture = "cloneMan.png";
        $this->name = "Original";
    }

    public function display()
    {
        echo "<img src='$this->picture'>";
        echo "<br />$this->name</p>";
    }
    function __clone()
    {
        // TODO: Implement __clone() method.

    }
}

/**
 * 具体类Person扩展了CloneMe抽象类。
 * $worker 实例化了一个Person类实例
 * 第二个实例变量$slacker克隆Person实例$worker
 * attention:克隆不会启动构造函数中的动作
 */
$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "Cloned";
$slacker->display();
