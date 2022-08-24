<?php include('header.php') ?>


<?php
if (isset($_SESSION['UserName'])) {
    if (isset($_POST['btn-add-to-cart'])) {

        $_SESSION['cartitems'] = ["cart1" => $_POST['cart1'], "cart2" => $_POST['cart2'], "cart3" => $_POST['cart3'], "cart4" => $_POST['cart4'], "cart5" => $_POST['cart5']];
        header("location:Viewcart.php");
    }


?>
    <div class="container">
        <h2>Add to cart</h2>


        <form method="post">
            <ul>
                <li class="mt-3">
                    <input type="text" name="cart1">
                </li>
                <li class="mt-3"> <input type="text" name="cart2"> </li>
                <li class="mt-3"><input type="text" name="cart3"> </li>
                <li class="mt-3"><input type="text" name="cart4"></li>
                <li class="mt-3"><input type="text" name="cart5"></li>

                <button type="submit" class="btn btn-primary ms-auto mt-3" name="btn-add-to-cart"> Add to cart</button>
                <a href="Viewcart.php"> View cart items</a>
            </ul>
            <?php




            ?>

        </form>


    </div>

<?php
} else {
    echo "<h3>LOGIN FIRST </h3>";
}
?>


</body>

</html>