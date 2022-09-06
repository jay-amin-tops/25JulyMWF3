
<?php

class MethodOverloading{
    public static $PublicData = "something";
    public function FunctionName(){
        echo "called";
    }
}
echo MethodOverloading::$PublicData;
?>