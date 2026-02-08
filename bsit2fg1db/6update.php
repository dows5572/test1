<?php
// Step 6: update.php - updates the password using form data

include("1connect.php");                                                            // Reuse the shared database connection

$sid = $_POST["id"];                                                                 // Read the submitted student id
$newpw = $_POST["newpw"];                                                            // Read the submitted new password

$sql = "UPDATE student SET password = '$newpw' WHERE id='$sid'";                     // Build SQL update query

if ($conn->query($sql) === true) {                                                   // Execute update and check result
    echo "updated";                                                                  // Output success message
} else {
    echo "error: " . $conn->error;                                                   // Output database error message
}

?>