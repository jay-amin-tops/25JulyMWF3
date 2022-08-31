
<?php

$a = 50;
$a = 150;
$a = 10;
$a = 1;

class MethodOverloading{
    public $PublicData = "something";
    public function FunctionName(){
        echo "called";
    }
    public function __get($data){
        echo $data; 
    }
    public function __set($key,$v){
        echo "<br>Key is ".$key."Value is ".$v."<br>"; 
    }
    public function __call($funcname,$v){
        echo "<br>Key is ".$funcname;
        print_r($v);

    }
    // public function FunctionName(){
    //     echo "called";
    // }
}

$Objex = new MethodOverloading;

echo $Objex->PublicData;
echo "<br>";
echo $Objex->UserName;
echo $Objex->UserName123;
echo $Objex->UsrName="testing";
echo $Objex->select("user","data",123);
echo $Objex->select("user","data",123,true);
echo $Objex->aapdeaddkrelunaam("user","data",123,true);
?>