<?php include('header.php') ?>


<h2> ABOUT US </h2>


<?php 

if (isset($_SESSION['uname'])) {
    ?>
<h3 class="text-center">  Hello <?php echo $_SESSION['uname']?> !</h3>
<?php
} else{
    echo "<h3>Please Login from account</h3>";
}
?>

</body>
</html>