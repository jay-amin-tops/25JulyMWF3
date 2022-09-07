<?php


interface RBINew{
    public function GiveInterest1();
}
interface RBI{
    public function GiveInterest();
}
class SBI implements RBI,RBINew{
    public function GiveInterest(){
        echo "called";
        echo "called 3.5";
    }
    public function GiveInterest1(){
        echo "called";
        echo "called 3.5";
    }
}
class BOB implements RBI{
    public function GiveInterest(){
        echo "called 2.5";
    }
}


$RBI = new SBI;
?>