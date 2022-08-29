<?php

class ParentClass{
    function ParentClassFunction(){ return "ParentClassFunction";}
}
class ChildClass extends ParentClass{
    function ChildFunction(){ return "ChildFunction"; }
}
$ChildObjectForAccessParentChildData = new ChildClass;
echo $ChildObjectForAccessParentChildData->ChildFunction();
echo "<br>";
echo $ChildObjectForAccessParentChildData->ParentClassFunction();

?>