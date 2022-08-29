<?php



class ArithmaticOp{
    function Addition($a,$b=0){
        // echo "50000 line code";
        // $a =50 ;
        // $b =50 ;
        $sum = $a + $b;
        echo "<BR>".$sum;
    }
}
$object = new ArithmaticOp;
$object->Addition(50,70);
$object->Addition(50,60);
$object->Addition(50,80);
$object->Addition(50,50);
$object->Addition(50);

?>