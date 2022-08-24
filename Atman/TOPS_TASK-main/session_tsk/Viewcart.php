<?php 
require('header.php'); 
// include('header1.php'); 
// require('heade1r.php'); 
require_once('header.php'); 
?>


<?php

$a = 10;
// $a = "";
// if ($a != "") {
    
// }

unset($a);
// if ($a != "") { }
if (isset($a)) { echo "a is there u may processed further";  }else{ echo "a not there"; } 

if (!isset($_SESSION['cartitems'])) {
    echo "<h3>ADD ITEMS FIRST</h3>";
} else {

    if (isset($_REQUEST['emptycart'])) {
        //unset($_SESSION['cartitems']);
        header("location:addtocart.php");
        
    }
    if ($_REQUEST['emptycart1']) {
        
        unset($_SESSION['cartitems']['cart1']);
    }
    if ($_REQUEST['emptycart2']) {
        
        unset($_SESSION['cartitems']['cart2']);
    }
    if ($_REQUEST['emptycart3']) {
        
        unset($_SESSION['cartitems']['cart3']);
    }
    if ($_REQUEST['emptycart4']) {
        
        unset($_SESSION['cartitems']['cart4']);
    }
    if ($_REQUEST['emptycart5']) {
        
        unset($_SESSION['cartitems']['cart5']);
    }
    
?>
    <div class="container">
        <h2>Cart Items</h2>


        <ul>
            <li> <?php if (isset($_SESSION['cartitems']['cart1'])) { echo $_SESSION['cartitems']['cart1'];}  ?></li>
            <li> <?php if (isset($_SESSION['cartitems']['cart2'])) { echo $_SESSION['cartitems']['cart2'];}  ?></li>
            <li> <?php if (isset($_SESSION['cartitems']['cart3'])) { echo $_SESSION['cartitems']['cart3'];}  ?></li>
            <li> <?php if (isset($_SESSION['cartitems']['cart4'])) { echo $_SESSION['cartitems']['cart4'];}  ?></li>
            <li> <?php if (isset($_SESSION['cartitems']['cart5'])) { echo $_SESSION['cartitems']['cart5'];}  ?></li>
        </ul>
        <form method="post">
            <input type="submit" name="emptycart1" value="Empty Cart 1" >
            <input type="submit" name="emptycart2" value="Empty Cart 2" >
            <input type="submit" name="emptycart3" value="Empty Cart 3" >
            <input type="submit" name="emptycart4" value="Empty Cart 4" >
            <input type="submit" name="emptycart5" value="Empty Cart 5" >
        </form>

    </div>
<?php
}
?>


</body>

</html>