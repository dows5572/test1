<?php
// Step 3: register.php - handles form submit and inserts a student record

include("1connect.php");                                                            // Reuse the shared database connection

$sid = $_POST["id"];                                                                 // Read the submitted student id
$username = $_POST["username"];                                                      // Read the submitted username
$password = $_POST["password"];                                                      // Read the submitted password

$sql = "INSERT INTO student (id, username, password) VALUES ('$sid', '$username', '$password')";  // Build SQL insert query

if ($conn->query($sql) === true) {                                                   // Execute insert and check result
    echo "new data added";                                                           // Output success message
} else {
    echo "Error: " . $conn->error;                                                   // Output database error message
}

?>