<?php

// Session start
session_start();

//Database
$connection = mysqli_connect("localhost", "root", "", "test");

if (!$connection) {
    die ("Error connecting to the database");
}

if (!isset($_POST['submit'])) {
    echo "Error in the submit";
} else {
    $query = "SELECT FROM users(first_name, last_name, address) VALUES ('$_POST[firstName]', '$_POST[lastName]', '$_POST[address]')";
    if (!mysqli_query($connection, $query)) {
        echo "Error in the query";
    } else {
        echo "Task successful";
    }
}