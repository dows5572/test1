<!DOCTYPE html>                                                                    <!-- Step 2: regform.php - main page that shows the form and the list -->
<html lang="en">                                                                     <!-- Set document language to English -->

<head>
    <meta charset="UTF-8">                                                           <!-- Use UTF-8 for character encoding -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">          <!-- Make layout responsive -->
    <title>regform</title>                                                          <!-- Browser tab title -->
</head>

<body>
    <h1>REGISTRATION FORM</h1>                                                       <!-- Page header text -->
    
    <form action="3register.php" method="post">                                     <!-- Send form data to 3register.php via POST -->
        <label for="id">ID: </label><br>                                                 <!-- Label for the id field -->
        <input type="text" name="id" id="id" placeholder="Enter ID"><br><br>                                  <!-- Input for student id -->
        
        <label for="username">Username: </label><br>                                     <!-- Label for username field -->
        <input type="text" 
                name="username" 
                id="username" 
                required
                placeholder="Enter Username"><br><br>                            <!-- Input for username -->
        
        <label for="password">Password: </label><br>                                     <!-- Label for password field -->
        <input type="password" name="password" id="password" placeholder="Enter Password"><br><br>
                            <!-- Input for password (masked) -->
        
        <input type="submit" value="Register"><br>                                   <!-- Submit button -->
        
       <!--<a href="5updateform.php">Update</a> -->
        <input type="button" value="Update" onclick="window.location.href='5updateform.php'">                                       <!-- Link to update form page -->
    </form>
    
    <?php include("4retrieve.php"); ?>                                              <!-- Embed the student list table here -->
    
</body>
</html>