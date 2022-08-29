<?php
date_default_timezone_set('Asia/Kolkata');

// echo "called";
// echo date();
echo time();
echo "<br>";
echo date("d-m-Y");
echo "<br>";
echo date("d-M-Y");
echo "<br>";
echo date("d-M-Y H:i:s");
echo "<br>";
echo date("d-M-Y h:i:s A");
echo "<br>";
echo date("j-D-M-Y h:i:s A");

$date = date_create('2000-01-01');
echo "<pre>";
print_r($date);
echo date_format($date, 'Y-m-d H:i:s');

$originalDate = "2010-03-21";
echo "<pre>";
print_r(strtotime($originalDate));
echo "<pre>";

echo $newDate = date("d-m-Y", strtotime($originalDate));

// function lecture($laptop){
//     # code...
// }

// test("hp");
// test("lenovo");
// test();
?>