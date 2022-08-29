<?php
// 'character'
// "string"
// $s = 'Welcome to "t TOPS" Tech"no';
$s = "Welcome to 't TOPS' Tech'no";
$s = "this is Jay's no";

// "select * from users where username = 'jay's no'"
// $a = 123;
// $b= 123.123;
// $c = array("data");
echo $s."<br>";
echo addslashes($s);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="data">
        <input type="submit">
    </form>
</body>
</html>