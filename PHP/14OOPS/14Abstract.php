<?php


abstract class RBI{
    abstract public function GiveInterest();
    public function CountingInterest(){
        
    }
}
class SBI extends RBI{
    public function GiveInterest(){
        echo "called";
        echo "called 3.5";
    }
}
class BOB extends RBI{
    public function GiveInterest(){
        echo "called 2.5";
    }
}


$RBI = new SBI;
?>