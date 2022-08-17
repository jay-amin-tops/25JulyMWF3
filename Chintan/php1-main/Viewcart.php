<?php include('header.php') ?>


<?php if (!isset($_SESSION['cartitems'])) {
    echo "<h3>Sorry no items added</h3>";
} else {
    // echo "<pre>";
    // print_r($_SESSION);
    if (isset($_REQUEST['emptycart'])) {
        unset($_SESSION['cartitems']);
        header("location:addtocart.php");
        
    }
?>
    <div class="container">
        <h2>Cart Items</h2>


        <ul>
            <li> <?php echo $_SESSION['cartitems']['cart1'] ?></li>
            <li> <?php echo $_SESSION['cartitems']['cart2'] ?></li>
            <li> <?php echo $_SESSION['cartitems']['cart3'] ?></li>
            <li> <?php echo $_SESSION['cartitems']['cart4'] ?></li>
            <li> <?php echo $_SESSION['cartitems']['cart5'] ?></li>
        </ul>
        <form method="post">
            <input type="submit" name="emptycart" value="Empty Cart" id="">
        </form>

    </div>
<?php
}
?>


</body>

</html>