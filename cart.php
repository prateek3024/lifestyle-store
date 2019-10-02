<!-- CART : PHP FILE -->

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
        <title>Cart | Lifestyle Store</title>
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
                <!-- Table : START -->
                <div class="row text-center" id="table">
                    <div class="col-md-6 col-md-offset-3">
                        <table class="table table-striped">
                            <!-- Show table only if there are items added in the cart -->
                            <?php
                                $sum = 0;
                                $user_id = $_SESSION['user_id'];
                                $query = "SELECT items.id, items.name AS Name, items.price AS Price FROM users_items JOIN items ON users_items.item_id=items.id WHERE users_items.user_id='$user_id' and status='Added to cart'";
                                $result = mysqli_query($con, $query) or die(mysqli_error($con));
                                if (mysqli_num_rows($result) >= 1) {
                            ?>
                            <thead>
                                <tr>
                                    <th>Item Number</th>
                                    <th>Item Name</th>
                                    <th>Price</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    $sum += $row["Price"];
                                    $id = $row["id"].", ";
                                    echo "<tr><td>"."#".$row["id"]."</td><td>".$row["Name"]."</td><td>Rs ".$row["Price"]."</td><td><a href='cart-remove.php?id={$row['id']}' class='remove_item_link'> Remove </a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                echo "<tr><td></td><td>Total</td><td>Rs ".$sum."</td><td><a href='success.php?itemsid=".$id."' class='btn btn-primary'>Confirm Order</a></td></tr>";
                                ?>
                            </tbody>
                            <?php
                            }else {
                                echo "Add items to the cart first!";
                            }
                            ?>
                        </table>
                    </div>
                </div>
                <!-- Table : END -->
            </div>
        </div>
        <!-- Content : END -->
        
        <!-- Footer : START -->
        <?php include 'includes/footer.php'; ?>
        <!-- Footer : END -->
    </body>
</html>
