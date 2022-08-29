<?php

echo $MyString = "this is the demo for the string is can hold Alphanumeric value and symbals too like A-Z,a-z,
0-9 and !@#$%^&*() ";
echo "<br>";
$str = bin2hex($MyString);
echo "<br>";
echo ($str); 
echo "<br>";
echo bin2hex("A");

echo "<br>==================== Chop ====================<br><br>";

$str = "User Hello World! ThisUser";
// echo $str . "<br>Chop : ";
echo chop($str,"User");

echo "<br>Trim User: ";

echo trim($str,"User");
echo "<br>Trim : ";
echo trim($str);
echo "<br>RTrim : ";
echo rtrim($str,"User");
echo "<br>LTrim : ";
echo ltrim($str,"User");

echo "<br>====================Different values====================<br><br>";

echo chr(41) . "<br>"; // Decimal value
echo chr(0101) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value


echo "<br>============== Chunk Split==============<br>";
echo $MyString = "this is the demo for the string is can hold Alphanumeric value and symbals too like A-Z,a-z,
0-9 and !@#$%^&*() ";

echo "<br>";
echo chunk_split($MyString,2,"$");

echo "<br>============== Count Chars==============<br>";

echo $str = "hhhh A a a";
echo "<pre>";
print_r( count_chars($str)); // give 1 where ascii values stored char
print_r( count_chars($str,1)); // give only thoes keys where char stored
print_r( count_chars($str,2)); // remove thoes keys where char stored



echo "<br>============== md5 ==============<br>";
$md5Str = "ab";
$md5Str1 = "kuch alag@s";
// $pass = "TOPS";
$pass = "check@data444";
$md5Str2 = "aAAsdfgkjahdfgkhajdfgkjhasdkjg";

echo md5($md5Str)."<br>";  // use for the encription and its one way encription we cant decript it
echo md5($pass)."<br>";  // use for the encription and its one way encription we cant decript it
// exit;
echo md5($md5Str1)."<br>"; 
echo md5($md5Str2)."<br>";

echo "<br>============== base64_encode ==============<br>";
echo base64_encode($md5Str1)."<br>"; //also use for the encription but it is tow way mease php provides encription and decription too
echo base64_encode($md5Str2)."<br>";

echo base64_decode(base64_encode($md5Str2))."<br>";


$str = "tops tech";
$str1 = "The    tops tech   data";

echo strlen($str)."<br>"; 
echo "strtoupper : ".strtoupper($str)."<br>"; 
echo "strtolower : ".strtolower($str)."<br>"; 
echo "ucfirst : ".ucfirst($str1)."<br>"; 
echo "ucwords : ".ucwords($str1)."<br>"; 
echo trim($str1)."<br>"; 
echo "This is the rtrim: ".rtrim($str1,'data')."<br>"; 
echo "This is the ltrim: ".ltrim($str1,'The')."<br>"; 



echo "<br>============== html_entity_decode ==============<br>";

echo "<a href='google.com'>Google</a><br><br>";
echo $strhtml = '&lt;a href=&quot;https://www.tops-int.com&quot;&gt;tops.com&lt;/a&gt;';
echo html_entity_decode($strhtml)."<br>";
$strhtmlent = '<a href="https://www.tops-int.com">Go to Tops Technology</a></br>';
echo "This is the output: ".$strhtmlent;
echo htmlentities($strhtmlent)."<br>";
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($strhtmlent);
?>

<!-- &lt;a href=&quot;https://www.tops-int.com&quot;&gt;tops.com&lt;/a&gt; -->