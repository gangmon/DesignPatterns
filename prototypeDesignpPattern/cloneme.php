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

$worker = new Person();
$worker->display();

$slacker = clone $worker;
$slacker->name = "Cloned";
$slacker->display();
