<?php



$arr = array('Hello','World!','Beautiful','Day!');
echo "<pre>";
print_r($arr);
echo $JoinVal = join(" ",$arr);
echo "<br>====================<br>";


$Str = "My/ Name Is Sandeep";
$arrayVal = explode(" ",$JoinVal);
print_r($arrayVal);

echo $NewImplodeString = implode($arr," ");

?>
