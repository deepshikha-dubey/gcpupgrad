<?php
$servername = "10.11.64.4"; // Change this to your MySQL server's IP or hostname
$username = "root";
$password = "Welcome1";
$database = "mydb"; // Database name

// Create connection

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL!";

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS mydb";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

?>
