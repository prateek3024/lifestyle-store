<!-- SUCCESS : PHP FILE -->

<?php
require("includes/common.php");

// Redirects the user to index page if not logged in.
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Success | Lifestyle Store</title>
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
        <?php include 'includes/header.php'; ?>
        <!-- Header : END -->
        
        <!-- Content : START -->
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <h3 align="center">Your order is confirmed. Thank you for shopping with us.</h3>
                    <hr>
                    <p align="center">Click <a href="products.php">here</a> to purchase any other item.</p>
                </div>
            </div>
        </div>
        <!-- Content : END -->
        
        <!-- Footer : START -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer : END -->
    </body>
</html>