<?php

class OneTrick{
    private $storeHere;
    public function trick($whatever){
        $this->storeHere = $whatever;
        return $this->storeHere;
    }
}
$doIt = new OneTrick();
$dataNow = $doIt->trick("This is perfect");
echo $dataNow;
?>

<?php
//抽象属性和方法
abstract class  OneTrickAbstract{
    public $storeHere;
    abstract public function trick($whatever);
}

class OneTrickConcrete extends OneTrickAbstract{
    public function trick($whatever)
    {
        // TODO: Implement trick() method.
        $this->storeHere = "An abstract property";
        return $whatever.$this->storeHere;
    }
}
$workr = new OneTrickConcrete();
echo $workr->trick("From an abouct origin...");
?>
<?php
//接口
interface IMethodHolder{
    public function getInfo($info);
    public function sendInfo($info);
    public function caculate($first,$second);
}
?>
<?php
//实现IMethodHoder这个接口
class ImplementAlpha implements IMethodHolder{
    public function getInfo($info)
    {
        // TODO: Implement getInfo() method.
        echo "this is NEWS!".$info."<br>";
    }
    public function sendInfo($info)
    {
        // TODO: Implement sendInfo() method.
        return $info;
    }
    public function caculate($first, $second)
    {
        // TODO: Implement caculate() method.
        $calulated = first*$second;
        return $calulated;
    }
    public function useMethod(){
        $this->getInfo("the sky is falling...");
        echo $this->sendInfo("vote for Senator Snort");
        echo "you make $".$this->calculate(20,15)."in yout part-time job<br>";
    }
}
$workr = new ImplementAlpha();
$workr->useMethod();
?>
<!--2。1。4接口和常量-->
<?php
//以下接口包含Mysql连接中使用的常量
    interface IConnectInfo
    {
        const HOST = "localhost";
        const UNAME = "gang";
        const DBNAME = "gang";
        const PW = "fg";
        function testContetion();
    }
?>
//实现，使用作用域解析操作符来传递常量
<?php
class ConSQL implements IConnectInfo{
    private $server = IConnectInfo::HOST;
    private $currentDB = IConnectInfo::DBNAME;
    private $usr = IConnectInfo::UNAME;
    private $pass = IConnectInfo::PW;
    public function testContetion()
    {
        // TODO: Implement testContetion() method.
        $hookup = new mysqli($this->server,$this->usr,$this->pass,$this->currentDB);
        if (mysqli_connect_error()){
            die("database connect error");
        }
        print "you're hooker up";
        $hookup->close();
    }
}
$useContant = new ConSQL();
$useContant->testContetion();
?>
<!--类型提示-->
<?php
    interface IProduct
    {
        function apples();
        function oranges();
    }
?>
<!--FruitStore实现-->
<?php
class FruitStore implements IProduct{
    public function apples()
    {
        // TODO: Implement apples() method.
        return "Fruitstore sez--we have apples.<br/>";
    }
    public function oranges()
    {
        // TODO: Implement oranges() method.
        return "FruiStore sez--we have no citirus fruit.<br>";
    }
}
?>
<!--CirusStore实现-->
<?php
class CirusStore implements IProduct{
        public function apples() {
     // TODO: Implement apples() method.
        return "we do not sell apples<br>";
    }
        public function oranges()
        {
            // TODO: Implement oranges() method.
            return "Cirusstore  we have citrus<br/>";
        }
}
?>
<!--有类型提示对象-->
<?php
class UseProducts{
    public function __construct()
    {
        $appleSauce = new FruitStore();
        $orange = new CirusStore();
        $this->doInterface($appleSauce);
        $this->doInterface($orange);
    }
}
function doInterface(IProduct $product){
    echo $product->apples();
    echo $product->oranges();
}
$workr = new UseProducts();
?>


<?php
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

