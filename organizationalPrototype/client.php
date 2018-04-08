<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/7
 * Time: 下午3:08
 */

function __autoload($class_name)
{
    include $class_name .".php";
}

class Client
{
    private $market;
    private $manage;
    private $engineer;

    public function makeConProto()
    {
        $this->market = new Marketing();
        $this->manage = new Management();
        $this->engineer = new Engineering();
    }
    public function __construct()
    {
        $this->makeConProto();

        $Tess = clone $this->market;
        $this->setEmployee($Tess,"Tess Smith",101,"ts101-1234","../factoryMethod/haha.ico");
        $this->showEmployee($Tess);

        $Jacob = clone $this->market;
        $this->setEmployee($Jacob,"Jacob Jones",102,"jj101-2234","../factoryMethod/haha.ico");
        $this->showEmployee($Jacob);


    }
    public function showEmployee(IAcmePrototype $employNow)
    {
        $px = $employNow->getEmployeepic();
        echo "<img src=$px width='150' height='150'><br>";
        echo $employNow->getName()."<br>";
        echo $employNow->getDept()."<br>";
        echo $employNow->getId()."<p/>";
    }
    public function setEmployee(IAcmePrototype $employNow,$nm,$dp,$id,$px)
    {
        $employNow->setName($nm);
        $employNow->setDept($dp);
        $employNow->setId($id);
        $employNow->setEmployeePic($px);
    }

}
$worker = new Client();
