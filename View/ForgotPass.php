<?php
require '../Controller/ResetPass.php';

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Forgot Password</title>
        <link rel="stylesheet" href="../styles/ForgotPass.css">
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
                        <!-- <li><a href="#about">Logged In as: Admin</a></li> -->
                    </ul>
                </div>
            </div>
        <form action="../Controller/ResetPass.php" method="POST">
        <br>
            <br>
            <label for="uname">Enter User Name:</label>
            <input type="uname" name="uname" id="" />
            <br>
            <br>
            <label for="secQuestion">Secret your secret Question:</label>
            <select name="secQuestion" id="secQuestion">
            <option value="What is the name of the city you were born?">What is the name of the city you were born?</option>
            <option value="What was the name of your first pet?">What was the name of your first pet?</option>
            <option value="What is the name of your best friend?">What is the name of your best friend?</option>
            <option value="What is your favourite color?">What is your favourite color?</option>
            </select>
            <br>
            <br>
            <label for="ans">Ans:</label>
            <input type="ans" name="ans" id="" />
            <br>
            <br>
            <label for="newPassword">Enter New Password:</label>
            <input type="newPassword" name="newPassword" id="" />
            <br>
            <br>
            <label for="cpassword">Confirm Password:</label>
            <input type="cpassword" name="cpassword" id="" />
            <br>
            <br>
            <input type="submit" name = "fpass" value="Change Password" class="btn">
        </form>
    </body>
</html>
