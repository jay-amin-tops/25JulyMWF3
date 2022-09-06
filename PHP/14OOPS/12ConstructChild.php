
<?php

class ParentClassForConstruct{
    public function __construct(){
        echo "called ParentClassForConstruct";
    }
    public function FunctionName(){
        return "called FunctionName";
    }
}
class ChildClassForConstruct extends ParentClassForConstruct{
    public function __construct(){
        parent::__construct(); // explicite constructor calling
        echo "called ChildClassForConstruct";
    }
    public function FunctionName(){
        return "called ChildClassForConstruct";
    }
}

$ChildClassForConstruct = new ChildClassForConstruct;