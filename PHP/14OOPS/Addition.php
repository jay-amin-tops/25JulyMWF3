<?php

class ArithMaticOp{
    // public $msg = "Common Data from arithmatic";
    public $msg = 123;
    // public $msgNew = $this->msg."Common Data from arithmatic";
    public function Addition($a,$b){
        return $a+$b;
        // return $this->msg."msg".$a+$b;
    }
}
class AdvanceArithMaticOp extends ArithMaticOp{
    
    public function Average($z,$n){
       $sum= $this->Addition($z,$n);
       $Average =$sum/2;
        return [$sum,$Average];
        // return array($sum,$Average);
        // return $sum,$Average;
    }
}

$AdvanceArithMaticOp = new AdvanceArithMaticOp;
$Res= $AdvanceArithMaticOp->Average(50,40);
print_r($Res);