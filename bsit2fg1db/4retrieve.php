<?php
// Step 4: retrieve.php - fetches all student records and renders the list

include("1connect.php");                                                            // Reuse the shared database connection

$sql = "SELECT * FROM student";                                                      // Build SQL query to read all students
$result = $conn->query($sql);                                                        // Execute query and store the result set

echo "<table border=1>";                                                             // Start table with a border
echo "<tr>";                                                                         // Start the header row
echo "<th>ID</th>";                                                                  // Column header for ID
echo "<th>Username</th>";                                                            // Column header for username
echo "<th>Password</th>";                                                            // Column header for password
echo "<th>action</th>";                                                              // Column header for actions
echo "</tr>";                                                                        // End header row

if ($result->num_rows > 0) {                                                         // Check if there are any rows
    while ($row = $result->fetch_assoc()) {                                          // Loop through each row
        echo "<tr>";                                                                 // Start a data row
        
        echo "<td>";                                                                 // Start ID cell
        echo $row['id'];                                                             // Output ID value
        echo "</td>";                                                                // End ID cell
        
        echo "<td>";                                                                 // Start username cell
        echo $row['username'];                                                       // Output username value
        echo "</td>";                                                                // End username cell
        
        echo "<td>";                                                                 // Start password cell
        echo $row['password'];                                                       // Output password value
        echo "</td>";                                                                // End password cell
        
        echo "<td>";                                                                 // Start action cell
        echo "<a href='7delete.php?id=" . $row['id'] . "'>delete</a>";             // Delete link with id
        echo "</td>";                                                                // End action cell
        
        echo "</tr>";                                                                // End data row
    }
} else {
    echo "0 result";                                                                 // Show message when no rows are found
}

echo "</table>";                                                                     // Close the table

?>