<?php

$var1 = "123";

var_dump($var1);

echo $var1+15;


$name = "TOPS";
$lastname = "Technologies";


echo $name." ".$lastname;




$arr = array("TOPS","Techno",123,132.123);
echo "<pre>";
print_r($arr);

echo implode("/",$arr);

echo "<br>".$str = "This is the String";

$srt_arr = explode(' ', $str);
print_r($srt_arr);
?>