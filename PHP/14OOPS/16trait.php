<?php


trait RBINew{
    public function GiveInterest(){
        echo "caleld GiveInterest RBI new";
    }
}
trait RBI{
    public function GiveInterest1(){
        echo "caleld GiveInterest1 RBI new";
    }
}
class SBI {
    // use RBI,RBINew;
    use RBI;
    use RBINew;
    public function GiveInterest123(){
        $this->GiveInterest();
        echo "called";
        echo "called 3.5";
    }
}


$RBI = new SBI;
?>