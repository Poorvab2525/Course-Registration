<?php
$servername = "localhost";
$username = "root";
$password = "Rmin!03007";
$database = "course_reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>

