
<?php

class ParentClassForConstruct{
    public static $PublicData = "something";
    public function __construct(){
        echo"<br>";
        echo self::$PublicData;
        echo "called ParentClassForConstruct";
    }
    public function FunctionName(){
        return "called FunctionName";
    }
}
class ChildClassForConstruct extends ParentClassForConstruct{
    public function __construct(){
        parent::__construct(); // explicite constructor calling
        echo"<br>";
        echo "called ChildClassForConstruct";
    }
    public function FunctionName1(){
        echo parent::$PublicData;
        return "called ChildClassForConstruct";
    }
}
echo"<br>Out Side".ParentClassForConstruct::$PublicData;
$Objec = new ChildClassForConstruct;
echo"<br>";
$Objec->FunctionName();
echo"<br>";
$Objec->FunctionName1();
?>