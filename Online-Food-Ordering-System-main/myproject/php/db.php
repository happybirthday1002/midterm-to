<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "schema";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection and handle any errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8 for proper handling of special characters
$conn->set_charset("utf8");
?>
