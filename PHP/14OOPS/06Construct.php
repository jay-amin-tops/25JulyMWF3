<?php
class ConstructExample{
    public function __construct() {
        echo "Called __construct";
    }
    public function methodOther() {
        echo "Called";
    }
    public function __destruct(){   
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
    
<h2>Constructor</h2>
<p>Constructor is a method which is inboked by default when objects are created</p>
<p>Constructor never return</p>
<p>Constructor used for initi some val</p>


</body>
</html>