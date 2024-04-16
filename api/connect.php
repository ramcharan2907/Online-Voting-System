<?php
$host = "localhost"; // Change to "127.0.0.1" if desired
$username = "root"; // Adjust as needed
$password = ""; // Adjust if your MySQL setup requires a password
$database = "votings"; // Replace with your actual database name

$connect = mysqli_connect($host, $username, $password, $database);

if ($connect) {
    echo "Connected to the database!";
    // Additional database-related operations can be performed here
} else {
    echo "Connection failed. Error: " . mysqli_connect_error();
}
?>
