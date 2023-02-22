<?php

// Starting of the session.
session_start();

// Creating connection of the database using procedural approach.
$connection = mysqli_connect("loacalhost", "root", "", "test");// mysqli_connect($db_server_name, $db_user_name, $db_password, $db_name);

// Checking of the connection.
if (isset($connection)) {
    echo "Successfully connected with the database";
} else {
    die ("Error in the connection with the database");
}

// When the submit button is pressed
if (isset($_POST['submit'])) {
    // Hint: php selects data from the 'name' in the Html's tag.
    $query = "INSERT INTO books(book, search, download) VALUES ('$_POST[book]', '$_POST[search]', '$_POST[download]')";// name of the table: 'books' in the database: 'test'

    //Checking of the query run
    if (mysqli_query($connection, $query)) {
        echo "Task of the database performed successfully";
    } else {
        echo "Error: Task of the database unsuccessful";
    }
} else {
    echo "Error in the submit button";
}

// Retrieving data section (Data is retrieved from the database).
$retrieveData = "SELECT * FROM books";
mysqli_query($connection, $retrieveData);
echo "{$retrieveData}";// The data in the table book is displayed.

?>
