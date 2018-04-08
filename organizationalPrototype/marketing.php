<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/7
 * Time: 下午2:17
 */
include_once "IAcmePrototype.php";

class Marketing extends IAcmePrototype
{
    const UNIT= "Marketing";
    private $sales = "sales";
    private $promotion = "promotion";
    private $startegic = "strategic planning";

    public function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode)
        {
            case 101:
                $this->dept = $this->sales;
                break;
            case 102:
                $this->dept = $this->promotion;
            case 103:
                $this->dept = $this->startegic;
            default:
                $this->dept = "Unrecognized Marketing";
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
