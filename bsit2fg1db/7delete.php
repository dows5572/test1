<?php
// Step 7: delete.php - deletes a student record by id

include("1connect.php");                                                            // Reuse the shared database connection

$sid = $_GET["id"];                                                                  // Read the student id from the URL query string

$sql = "DELETE FROM student WHERE id='$sid'";                                        // Build the SQL delete statement

if ($conn->query($sql) === true) {                                                   // Execute the delete query and check result
    echo "deleted";                                                                  // Output success message
} else {
    echo "error: " . $conn->error;                                                   // Output database error message
}

?>