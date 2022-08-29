<?php 
$str = addcslashes("Hello World! t","t");
echo($str); 



echo "<br>";

$str = "Who's Peter Griffin?";
echo $str . " This is not safe in a database query.<br>";

echo addslashes($str) . " This is safe in a database query.";


echo "<br>";
$str = "Hello world!";
echo chunk_split($str,4,".");
echo "<br>";
$arr = array('tushar','abhi','jignesh','lalit','komal');
echo "<pre>";
print_r(implode('.',$arr));

echo "<br>";

echo "<br> ============ htmlentities ==============<br>";
echo $link= '<a href="link.com">Click here</a>';
echo "<br> ============ htmlentities OutPut ==============<br>";
echo htmlentities($link);
echo "<br>";
echo "<br>";
echo "<br>";

echo "<br> ============ string for html_entity_decode ==============<br>";
echo $str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo "<br>";
echo "<br> ============ Output html_entity_decode ==============<br>";
echo html_entity_decode($str);
echo "<br>";
echo "<br>";
echo "<br>";


echo "<br> ============ addslashes ==============<br>";
$String = "This Is 'the' string";
echo addslashes($String);

echo "<br> ============ String ==============<br>";
echo $StringForExplode = "Welcome to TOPS Technology";

echo "<br> ============ explode ==============<br>";
$strtoarray = explode(' ',$StringForExplode);
echo "<pre>";
print_r($strtoarray);

echo "<br> ============ implode ==============<br>";

$HobbyArray = array('Cricket','Football','Music','Reading');
print_r($HobbyArray);
echo $HobbyArray[0].'<br>';
echo $HobbyArray[1].'<br>';
echo $HobbyArray[2].'<br>';
echo $HobbyArray[3].'<br>';

echo $HobbyArray[1].','.$HobbyArray[2].'<br>';
echo $ImplodeStr = implode(',',$HobbyArray );

echo "<br> ============ MD5 ==============<br>";
echo $md5str = 'TOPS Technology';
echo "<br>";
echo md5($md5str);


echo "<br> ============ Split ==============<br>";
$split_array = str_split($md5str,4);
print_r(explode(' ',$md5str ));
print_r($split_array);

echo "<br> ============ len ==============<br>";
$len = strlen($md5str);
print_r($len);
echo "<br>";
var_dump($len);