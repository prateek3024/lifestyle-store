<?php
// Establishing Connection
$con = mysqli_connect("localhost", "root", "") or die(mysqli_error($con));
// Creating Database
$query = "CREATE DATABASE IF NOT EXISTS store";
mysqli_query($con, $query) or die(mysqli_error($con));
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
// Establishing Connection with Database
$con = mysqli_connect("localhost", "root", "", "store") or die(mysqli_error($con));
session_start();
?>
