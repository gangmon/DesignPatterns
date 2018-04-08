<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/7
 * Time: 下午2:03
 */

abstract class IAcmePrototype
{
    protected $name;
    protected $id;
    protected $employeePic;
    protected $dept;

    //Dept
    abstract function setDept($orgCode);
    abstract function getDept();

    //Name
    public function setName($emName)
    {
        $this->name = $emName;
    }
    public function getName()
    {
        return $this->name;
    }
    //ID
    public function setId($emId)
    {
        $this->id = $emId;
    }
    public function getId()
    {
        return $this->id;
    }
    //Employ Picture
    public function setEmployeePic($emPic)
    {
        $this->employeePic = $emPic;
    }
    public function getEmployeepic()
    {
        return $this->employeePic;
    }
    abstract function __clone();

}