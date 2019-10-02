<!-- COMMON : PHP FILE -->

<?php
    $con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con));
    // Creating database.
    $query = "CREATE DATABASE IF NOT EXISTS store";
    mysqli_query($con, $query) or die(mysqli_error($con));
    session_start();
?>
