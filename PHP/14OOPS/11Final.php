
<?php

final class FinalMethodOp{
    public function FunctionName(){
        return "called";
    }
}
// Declaring Child class for accessing parent properties for testing final keyword 
// class FinalMethodOpChild extends FinalMethodOp{
class FinalMethodOpChild{
    // public function FunctionName(){
    //     return "called FinalMethodOpChild";
    // }
    public function FunctionName1(){
        // echo $this->FunctionName();
        return "called FinalMethodOpChild";
    }
}
$oobbjj = new FinalMethodOpChild;
echo $oobbjj->FunctionName1();
?>