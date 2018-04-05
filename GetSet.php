<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/3/18
 * Time: 下午5:54
 */
//获取方法和设置方法
class GetSet{
    private $dataWarehouse;

    function __construct()
    {
        $this->setter(200);
        $got = $this->getter();
        echo $got;
    }
    private function getter(){
        return $this->dataWarehouse;
    }
    private function setter($datavalue){
        $dataWarehouse = $datavalue;
    }

}
$worker = new GetSet();

//多态：可以调用相同的接口的对象来完成不同的工作。
//下面的程序有两个类，他们有一个共同的接口
//poly.php
interface ISpeed{
    function fast();
    function cruise();
    function slow();
}

class Jet implements ISpeed{
    function slow()
    {
        // TODO: Implement slow() method.
        return 120;
    }
    function cruise()
    {
        // TODO: Implement cruise() method.
        return 1200;
    }
    function fast()
    {
        // TODO: Implement fast() method.
        return 1500;
    }
}
class Car implements ISpeed{
    function slow()
    {
        // TODO: Implement slow() method.
        $carSlow = 15;
        return $carSlow;
    }
    function cruise()
    {
        // TODO: Implement cruise() method.
        $carCruise = 65;
        return $carCruise;
    }
    function fast()
    {
        // TODO: Implement fast() method.
        $carZoon = 110;
        return $carZoon;
    }
}
$f22 = new Jet();
$jetSlow = $f22->slow();
$jetCruise = $f22->cruise();
echo "<br>My jet can take off $jetslow mgh and cruises at $jetCruise mph";

$ford = new Car();
$fordSlow = $ford->slow();
$fordSlow = $ford->cruise();
$foreSlow = $ford->fast();


//C#接口
//interface IFce{
//    string stringMethod();
//    int numMethod(int intProp);
//    void noReturnMethod();
//}

//p43