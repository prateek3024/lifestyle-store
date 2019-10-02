<!-- SETTINGS : PHP FILE -->

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
        <title>Settings | Lifestyle Store</title>
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
            <!-- Settings Panel : START -->
            <div class="container" id="settings-panel">
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                        <div class="panel panel-primary">
                            <!-- Panel Heading : START -->
                            <div class="panel-heading">
                                <h4>Settings</h4>
                            </div>
                            <!-- Panel Heading : END -->
                            
                            <!-- Panel Content : START -->
                            <div class="panel-body">
                                <form role="form" action="settings_script.php" method="POST">
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="old-password" placeholder="Old Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="new-password" placeholder="New Password" required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" type="password" name="new-password-again" placeholder="Re-type New Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Change</button>
                                </form>
                            </div>
                            <!-- Panel Content : END -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Settings Panel : END -->
        </div>
        <!-- Content : END -->
        
        <!-- Footer : START -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer : END -->
    </body>
</html>