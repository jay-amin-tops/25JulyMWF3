<?php
class ConstructExample{
    public $Author = "Chetan";
    // public $AuthorFullName = $this->Author."Test";
    // public $DbConnection = "mydb";
    // public $DbConnection = new mysqli("localhost","root","","masterdatabase"); //New expressions are not supported in this context in
    public function __construct() {
        $this->DbConnection = "Common Data for ".$this->Author;
        echo "Called __construct";
        echo "<pre>";
        print_r($this->DbConnection);
    }
    public function methodOther() {
        echo "Called";
    }
    public function __destruct(){   
        $this->DbConnection = "";
        unset($this->DbConnection);
        echo "Called__destruct";
    }

}

$ConstructExample = new ConstructExample;
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
    
<h2>destructor</h2>
<p>destructor invoked by default when we close the object at the end of script</p>


</body>
</html>