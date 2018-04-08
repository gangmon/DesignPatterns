<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/7
 * Time: 下午2:31
 */
include_once "IAcmePrototype.php";

class Management extends IAcmePrototype
{
    const UNIT="Management";
    private $research = "research";
    private $plan = "planning";
    private $operates = "operations";

    public function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode){
            case 201:
                $this->dept = $this->research;
                break;
            case 202:
                $this->dept = $this->plan;
                break;
            case 203:
                $this->dept = $this->operates;
            default:
                $this->dept = "It's default value";
        }
    }


    public function getDept()
    {
        // TODO: Implement getDdpt() method.
        return $this->dept;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}