<?php
// Step 1: connect.php - establish the database connection used by all pages

$servername = "localhost";                                                           // Database host (XAMPP local server)
$username = "root";                                                                  // Database username
$password = "";                                                                      // Database password (blank by default in XAMPP)
$dbname = "bsit2fg1";                                                                // Database name used by this project

$conn = new mysqli($servername, $username, $password, $dbname);                      // Create a new MySQLi connection object

if ($conn->connect_error) {                                                          // Check if the connection failed
    die("Connection failed: " . $conn->connect_error);                               // Stop and show error message
} else {
    echo "Connected successfully";                                                   // Show success message if connected
}

?>