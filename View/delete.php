<?php
session_start();
require '../Model/connect.php';
$loggedIn = loggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete User</title>
    <link rel="stylesheet" href="../styles/delete.css">
</head>
<body>
    <div class="navbar">
        <div class="logo">
            <ul>
                <li><a href="">Driver Chai</a></li>
            </ul>
        </div>
        <div class="navoption">
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="Register.php">Register</a></li>
                <li><a href="#about">About</a></li>
            </ul>
        </div>
    </div>
    <form action="../Controller/delete.php" method="post" novalidate>
        <h2>Delete User</h2>
        <label for="uname">Username:</label>
        <input type="text" name="uname" id="" value="<?php echo $loggedIn['username']; ?>" readonly/>
        <br><br>
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="" value="<?php echo $loggedIn['firstName']; ?>" readonly/>
        <br><br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="" value="<?php echo $loggedIn['lastName']; ?>" readonly/>
        <br><br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="" value="<?php echo $loggedIn['password']; ?>" readonly/>
        <br><br>
        <!-- Hidden input for user ID -->
        <input type="hidden" name="id" value="<?php echo $loggedIn['id']; ?>">
        <!-- Submit button for delete -->
        <input type="submit" name="delete" value="Delete">
    </form>
</body>
</html>