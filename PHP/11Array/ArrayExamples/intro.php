

<?php

// $arr = ["tops"];
// $arr = ["tops","Techno","S",true,1,20.2];
// echo "<pre>";
// print_r($arr);
// var_dump($arr);
// var_export($arr);
// key=>value
// 0 index starting

$Data = array("username"=>"TOPS","Password"=>"123","rank"=>1,"Active"=>true);
foreach ($Data as $key => $value) {
    echo "key is : $key and value is : $value <br>";
}
// $UserData = array("TOPS","Password"=>"123","rank"=>1,"Active"=>true);
// $UserData = array("TOPS","Password"=>"123","rank"=>1,true);
// $UserData = array("TOPS","Password"=>"123","rank"=>1,true,"data"=>"test",987=>"a","test");
// echo "<pre>";
// print_r($UserData);


$UserData = array("schoolA"=>array("10th"=>array("Ram"=>array("Maths"=>100,"Eng"=>98,"Comp"=>100),"test"=>array("Maths"=>100,"Eng"=>98,"Comp"=>100))));
echo "<pre>";
print_r($UserData);
print_r($UserData['schoolA']);
print_r($UserData['schoolA']['10th']['Ram']['Maths']);
echo "<br>Mahts Marks of Ram is ".$UserData['schoolA']['10th']['Ram']['Maths']

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
    <h1>Array</h1>
    <p>Store multiple data in single variable</p>
    <ul>
        <li>simple array / single/numeric dimension =>key must have numeric value only</li>
        <li>associative dimension => key user definded alpha numeric values</li>
        <li>multi dimension</li>
    </ul>
</body>
</html>