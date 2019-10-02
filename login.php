<!-- LOGIN : PHP FILE -->

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
        <title>Login | Lifestyle Store</title>
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
        <!-- Header -->
        <?php include 'includes/header.php'; ?>
        <!-- Header end -->
        
        <div id="content">
            <!-- Login panel -->
            <div class="container-fluid decor-bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary">
                            <!-- Panel heading -->
                            <div class="panel-heading">
                                <h4>LOGIN</h4>
                            </div>
                            <!-- Panel content -->
                            <div class="panel-body">
                                <!-- Panel Header -->
                                <p class="text-warning"><i>Login to make a purchase</i></p>
                                <!-- Login form -->
                                <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button>
                                </form>
                                <br>
                                <!-- Panel Footer -->
                                <div class="panel-footer">
                                    <p style="margin:5px 0;">Don't have an account? <a href='signup.php'>Register</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login panel end -->
        </div>
        <!-- Footer -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer end -->
    </body>
</html>