<?php

class ParentClass {
    public function ParentClassFunction(ChildClass $ChildClass){
        echo "called";
        $ChildClass->otherMethod();
        echo "called 3.5";
    }
}
class ChildClass {
    public function ChildMethod(array $arr=[]){
        echo "called 2.5";
    }
    public function otherMethod(){
        echo "called 2.5";
    }
}

$ChildClass = new ChildClass;
$ParentClass = new ParentClass;
$ParentClass->ParentClassFunction($ChildClass);
// $ChildClass->ChildMethod(array("asd"));
?>