<!-- PRODUCTS : PHP FILE -->

<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Products | Lifestyle Store</title>
        <!-- Bootstrap Core CSS -->
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery-3.4.1.min.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Header : START -->
        <?php
            include 'includes/header.php';
            include 'includes/check-if-added.php';
        ?>
        <!-- Header : END -->
        
        <!-- Content : START -->
        <div class="container" id="content">
            <!-- Jumbotron Header : START -->
            <div class="jumbotron home-spacer" id="products-jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
            </div>
            <!-- Jumbotron Header : END -->
            
            <!-- Thumbnails : START -->
            <hr>
            <!-- Cameras : START -->
            <div class="row text-center" id="cameras">
                <!-- Cannon EOS -->
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/5.jpg" alt=" ">
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>price: Rs. 36,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(1)) {
                                        // This is same as if (check_if_added_to_cart != 0) ?>
                                        <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                                <?php } else { ?>
                                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                                <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- Nikon EOS -->
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/2.jpg" alt=" ">
                        <div class="caption">
                            <h3>Nikon EOS</h3>
                            <p>Price: Rs. 40,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(2)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- Sony DSLR -->
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/3.jpg" alt=" ">
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(3)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- Olympus DSLR -->
                <div class="col-md-3 col-sm-6 home-feature">
                    <div class="thumbnail">
                        <img src="img/4.jpg" alt=" ">
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 50,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(4)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cameras : END -->

            <!-- Watches : START -->
            <div class="row text-center" id="watches">
                <!-- Titan Model #301 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/9.jpg" alt=" ">
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 13,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(5)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- Titan Model #201 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/10.jpg" alt=' '>
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(6)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- HMT Milan -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/11.jpg" alt=" ">
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price Rs. 8000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- Faber Luba #111 -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/12.jpg" alt=" ">
                        <div class="caption">
                            <h3>Faber Luba #111</h3>
                            <p>Price: Rs. 18,000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Watches : END -->
            
            <!-- Shirts : START -->
            <div class="row text-center" id="shirts">
                <!-- H&W -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/13.jpg" alt=" ">
                        <div class="caption">
                            <h3>H&amp;W</h3>
                            <p>Price: Rs. 800.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(9)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- Luis Phil -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/14.jpg" alt=" ">
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- John Zok -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt=" ">
                        <div class="caption">
                            <h3>John Zok</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(11)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
                <!-- Jhalsani -->
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/6.jpg" alt=" ">
                        <div class="caption">
                            <h3>Jhalsani</h3>
                            <p>Price: Rs. 1300.00</p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                            <?php } else {
                                // We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) {
                                    // This is same as if (check_if_added_to_cart != 0) ?>
                            <a href='#' class='btn btn-block btn-success' disabled>Added to cart</a>
                            <?php } else { ?>
                            <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-primary btn-block">Add to cart</a>
                            <?php }
                                } ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shirts : END -->
        </div>
        <!-- Content : END -->
        
        <!-- Footer : START -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer : END -->
    </body>
</html>
