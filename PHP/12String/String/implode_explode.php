<?php
echo $st = "Welcome To The TOPS Techno";
// explode(' ', $st);
$arr = explode(' ', $st);
echo "<pre>"; 
print_r($arr);
echo $str_imp = implode('%',$arr);
echo "<br>";
echo $str_imp = join('%',$arr);
// implode(glue, pieces)
?>