<!-- SIGN UP : PHP FILE -->

<?php
require("includes/common.php");

// Redirects the user to products page if logged in.
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Sign Up | Lifestyle Store</title>
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
        
        <div id="content">
            <!-- Panel : START -->
            <div class="container-fluid color-bg" id="signup-panel">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <div class="panel panel-primary">
                            <!-- Panel heading : START -->
                            <div class="panel-heading">
                                <h2>Sign Up</h2>
                            </div>
                            <!-- Panel heading : END -->
                            
                            <!-- Panel content : START -->
                            <div class="panel-body">
                                <form action="signup_script.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Name" name="name" required="true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" name="email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" required="true" pattern=".{6,}">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Contact" name="contact" maxlength="10" size="10" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="City" name="city" type="text" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Address" name="address" type="text" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <!-- Panel content : END -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Panel : END -->
        </div>
        
        <!-- Footer : START -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer : END -->
    </body>
</html>