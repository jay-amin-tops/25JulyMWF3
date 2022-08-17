<?php include('header.php'); 

// echo "<pre>";
// print_r($_SESSION['UserData']->username);
?>


<h2>HOME PAGE </h2> 
<h2>Hello, <?php echo $_SESSION['UserData']->username; ?> </h2> 

</body>
</html>