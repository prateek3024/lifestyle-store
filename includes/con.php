<!-- CON : PHP FILE -->

<?php
// Establishing Connection with Database
$con = mysqli_connect("localhost", "root", "", "store") or die(include 'includes/process.php');
session_start();
?>
