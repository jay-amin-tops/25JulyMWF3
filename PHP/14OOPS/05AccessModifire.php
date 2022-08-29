<?php

use ParentClass as GlobalParentClass;

class ParentClass{
    public $water = "water public DM value";
    protected $juice = "juice Protected DM value";
    private $wine = "costly wine Private value";
    function AdditionofTow($a,$b){ 
        $Test= "Testing";
        return $a+$b; //50-60k
    }
}
class ChildClass extends ParentClass{
    function Avrg(){ 
        echo $this->juice;
        // echo $this->wine;
    }
}
$ParentClassObject = new ChildClass;
echo $ParentClassObject->water;
// echo $ParentClassObject->wine;
// echo $ParentClassObject->juice;
echo "<br>";
echo $ParentClassObject->Avrg();
// echo $ChildObjectForAccessParentChildData->ParentClassFunction();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Class</h2>
<p>class is collection of data member and member function only</p>


</body>
</html>