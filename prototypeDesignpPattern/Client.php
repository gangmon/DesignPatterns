<?php
/**
 * Created by PhpStorm.
 * User: gang
 * Date: 2018/4/6
 * Time: 下午7:32
 */
function __autoload($class_name)
{
    include $class_name . ".php";
}
class Client
{
    //For direct instantiation
    private $fly1;
    private $fly2;

    //for cloneing
    private $c1Fly;
    private $c2Fly;
    private $updateCloneFly;

    public function __construct()
    {
        //Instantiate
        $this->fly1 = new MaleProto();
        $this->fly2 = new FemaleProto();

        //Clone
        $this->c1Fly = clone $this->fly1;
        $this->c2Fly = clone $this->fly2;

        $this->updateCloneFly = clone $this->fly2;

        //update clones
        $this->c1Fly->mated = "true";
        $this->c2Fly->fecundity = "186";
        $this->updateCloneFly->eyeColor = "purple";
        $this->updateCloneFly->wingBeat = "220";
        $this->updateCloneFly->fecundity = "92";

        //send through type hitting method
        //通过类型提示方法发送
        $this->showFly($this->c1Fly);
        $this->showFly($this->c2Fly);

        $this->showFly($this->updateCloneFly);
    }

    private function showFly(IPrototype $fly)
    {
        echo "Eye color:".$fly->eyeColor."<br/>";
        echo "wing Beats/second:".$fly->wingBeat."<br/>";
        echo "Eye units:".$fly->unitEyes."<br/>";

        $genderNow = $fly::gender;
        echo "Gender:".$genderNow."<br/>";
        if ($genderNow == "FEMALE")
        {
            echo "Number of eggs:".$fly->fecundity."<p/>";
        }
        else
        {
            echo "Mated:".$fly->mated."<p/>";
        }


    }

}
$worker = new Client();
