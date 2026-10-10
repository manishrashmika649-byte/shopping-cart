<!-- header -->

<header class="header">

<div class="header_body">
    <a href="index.php" class="logo">gigahub</a>
    <nav class="navbar">
        <a href="index.php">add product</a>
        <a href="view_product.php">view product</a>
        <a href="shop_products.php">shopit</a>
    </nav>
    <!--select query-->
<?php
$cart_number=mysqli_query($conn,"select * from `cart`") or die('query failed');
$row_count=mysqli_num_rows($cart_number);




?>



<!-- shopping cart icon -->
     
     <a href="cart.php" class="cart"><i class="fa fa-shopping-cart" aria-hidden="true"></i><span><sup><?php    echo $row_count;     ?></sup></span></a>
    <!-- <div id="menu-btn" class="fas fa-bars"></div> -->

</div>
</header>