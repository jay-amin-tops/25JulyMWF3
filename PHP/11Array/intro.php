<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array</h2>
    <p>we can store multiple values in single variable</p>
    <p>array() / [] </p>
    <ul>
        <li>index start with 0</li>
    </ul>
    <ol>
        <li>simple array / numeric (index will contain numbers only)</li>
        <li>associative array / index will contain aplha/numeric user definded only</li>
        <li>multi-dimension array (array within array)</li>
    </ol>
    <p>for access array data there are so many ways available in PHP like foreach() or map or filter</p>
    <p>for checking array data we hv print_r(),var_dump(),var_export()</p>
    <?php
        $Marks = [90,99,95,98,"ABC",12.12,true];
        echo "<pre>";
        print_r($Marks);
        var_dump($Marks);
        var_export($Marks);
    //    echo count($Marks);
    // for ($i=0; $i < count($Marks)-1 ; $i++) { 
        //     echo $Marks[$i]." &nbsp; ";
        // }
        echo "<br>";
        foreach ($Marks as $key => $value) {
            echo "Key us $key and value id $value <br>";
        }

        
        $MarksAssoc = ["Sub1"=>90,"Sub2"=>99,"Sub3"=>95,"Sub4"=>98];
        echo "<pre>";
        print_r($MarksAssoc);
        echo $MarksAssoc['Sub1'];
        // $Multi =   array("ABC"=>["Sub1"=>90,"Sub2"=>99,"Sub3"=>95,"Sub4"=>98],"Xyz"=>array("98","87",89,89));
        $Multi =  array("SchoolName"=>array("10Th"=>array("ABC"=>["Sub1"=>90,"Sub2"=>99,"Sub3"=>95,"Sub4"=>98],"Xyz"=>array("98","87",89,89)),"12Th"=>array("kkk"=>["Sub1"=>90,"Sub2"=>99,"Sub3"=>95,"Sub4"=>98],"MMM"=>array("98","87",89,89)))) ;
        print_r($Multi);
        echo $Multi['SchoolName']['10Th']['ABC']['Sub1'];
        ?>
</body>
</html>