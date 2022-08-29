<?php
echo $md5str = 'TAhmedabadTechno@';
echo "<br>";
echo $db = md5($md5str);

$loginPwd = md5('admin@123');

echo "<br>".base64_encode($md5str);
// base64_decode();

?>