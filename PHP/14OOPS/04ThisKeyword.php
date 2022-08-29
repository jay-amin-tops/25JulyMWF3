<?php

class ParentClass{
    function AdditionofTow($a,$b){ 
        return $a+$b; //50-60k
    }
}
class ChildClass extends ParentClass{
    function Avrg($x,$z){ 
        // ($x+$z)/2;
        $Addition = $this->AdditionofTow($x,$z);//parent function calling using $this peusudo variable 
        return $Addition/2;
    }
}
$ChildObjectForAccessParentChildData = new ChildClass;
echo $ChildObjectForAccessParentChildData->Avrg(60,30);
echo "<br>";
// echo $ChildObjectForAccessParentChildData->ParentClassFunction();

?>