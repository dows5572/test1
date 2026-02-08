<!DOCTYPE html>                                                                    <!-- Step 5: updateform.php - shows the form to change a password -->
<html lang="en">                                                                     <!-- Set document language to English -->

<head>
    <meta charset="UTF-8">                                                           <!-- Use UTF-8 for character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">          <!-- Make layout responsive -->
    <title>Document</title>                                                         <!-- Browser tab title -->
</head>

<body>
    <h1>UPDATE FORM</h1>                                                             <!-- Page header text -->
    
    <form action="6update.php" method="post">                                       <!-- Send form data to 6update.php via POST -->
        <label for="id">ID: </label>                                                 <!-- Label for the id field -->
        <input type="text" name="id" id="id"><br>                                    <!-- Input for student id -->
        
        <label for="newpw">New Password: </label>                                    <!-- Label for new password field -->
        <input type="text" name="newpw" id="newpw"><br>                              <!-- Input for new password -->
        
        <input type="submit" value="Update">                                         <!-- Submit button -->
    </form>
    
</body>
</html>