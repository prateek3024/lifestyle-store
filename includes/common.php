<!-- First Time Database Run -->

<?php
// Establishing Connection
$con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con));
// Creating Database
$query = "CREATE DATABASE IF NOT EXISTS store";
mysqli_query($con, $query) or die(mysqli_error($con));
// Establishing Connection with Database
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
// Creating Table: items
$query = "CREATE TABLE IF NOT EXISTS store.items (
    id int(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    price int(11) NOT NULL,
    PRIMARY KEY(id)
)";
mysqli_query($con, $query) or die(mysqli_error($con));
// Creating Table: users
$query = "CREATE TABLE IF NOT EXISTS store.users (
    id int(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    contact VARCHAR(255) NOT NULL,
    city VARCHAR(255) NOT NULL,
    address VARCHAR(255) NOT NULL,
    PRIMARY KEY(id)
)";
mysqli_query($con, $query) or die(mysqli_error($con));
// Creating Table: users_items
$query = "CREATE TABLE IF NOT EXISTS store.users_items (
    id int(11) NOT NULL AUTO_INCREMENT,
    user_id int(11) NOT NULL,
    item_id int(11) NOT NULL,
    status enum('Added to cart', 'Confirmed') NOT NULL,
    PRIMARY KEY(id),
    KEY item_id(item_id),
    KEY user_id(user_id),
    CONSTRAINT users_items_ibfk_1 FOREIGN KEY(user_id) REFERENCES users(id),
    CONSTRAINT users_items_ibfk_2 FOREIGN KEY(item_id) REFERENCES items(id)
)";
mysqli_query($con, $query) or die(mysqli_error($con));
// Checking items table data
$query = "SELECT * from items";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result) == 0) {
    // Inserting items table data
    $query = "INSERT INTO items (name, price) values
    ('Canon EOS', 36000),
    ('Nikon DSLR', 40000),
    ('Sony DSLR', 450000),
    ('Olympus DSLR', 50000),
    ('Titan Model #301', 13000),
    ('Titan Model #201', 3000),
    ('HMT Milan', 8000),
    ('Faber Luba #111', 18000),
    ('H&W', 800),
    ('Luis Phil', 1000),
    ('John Zok', 1500),
    ('Jhalsani', 1300)";
    mysqli_query($con, $query) or die(mysqli_error($ocn));
}
?>
