<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/7
 * Time: 下午2:49
 */
include_once "IAcmePrototype.php";
class Engineering extends IAcmePrototype
{
    const UNIT = "Engnineering";
    private $development = "programing";
    private $design = "digital artwork";
    private $sysAd = "system administration";

    public function setDept($orgCode)
    {
        // TODO: Implement setDept() method.
        switch ($orgCode)
        {
            case 301:
                $this->dept = $this->development;
                break;
            case 302:
                $this->dept = $this->design;
                break;
            case 303:
                $this->dept = $this->sysAd;
                break;
            default :
                $this->dept = "Unrecognized Engineering";
        }

    }

    public function getDept()
    {
        // TODO: Implement getDdpt() method
        return $this->dept;
    }

    function __clone()
    {
        // TODO: Implement __clone() method.
    }
}
