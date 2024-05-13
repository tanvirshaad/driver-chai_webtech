<?php
session_start();
if(isset($_SESSION['passwordmatched']))
{
    $passerrmsg = $_SESSION['passwordmatched'];
}
else{
    $passerrmsg = "";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Register</title>
        <script type="text/javascript" src="../js/registerValidate.js"></script>
        <link rel="stylesheet" href="../styles/register.css">
    </head>
    <body>
        <section class="container">
            <div class="navbar">
                <div class="logo">
                    <ul>
                        <li><a href="">Driver Chai</a></li>
                    </ul>
                </div>
                <div class="navoption">
                    <ul>
                        <li><a href="#home">Home</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
            </div>
            <div class="content">
                <div class="text">
                    <h2>Welcome to DRIVER CHAI</h2>
                </div>
                <div class="form">
                    <form action="../Controller/credentials.php" method="POST" onsubmit="return registerValidate();">
                    <label for="fname">First Name:</label>
                    <input type="text" name="fname" id="fname" />
                    <br>
                    <br>
                    <label for="lname">Last Name:</label>
                    <input type="text" name="lname" id="lname" />
                    <br>
                    <br>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" />
                    <br>
                    <br>
                    <label for="uname">Username:</label>
                    <input type="text" name="uname" id="uname" />
                    <br>           
                    <br>
                    <label for="secQuestion">Secret Question:</label>
                    <select name="secQuestion" id="secQuestion">
                    <option value="What is the name of the city you were born?">What is the name of the city you were born?</option>
                    <option value="What was the name of your first pet?">What was the name of your first pet?</option>
                    <option value="What is the name of your best friend?">What is the name of your best friend?</option>
                    <option value="What is your favourite color?">What is your favourite color?</option>
                    </select>
                    <br>
                    <label for="ans">Ans:</label>
                    <input type="ans" name="ans" id="ans" />
                    <br>
                    <br>
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" />
                    <br>
                    <br>
                    <label for="password">Confirm Password:</label>
                    <input type="password" name="cpassword" id="cpassword" />
                    <br>
                    <?php echo $passerrmsg;  ?>
                    <br>
                    <input type="submit" name="register" value="Register" class="btn">
                </form>
            <p>Already have an account? go to <a href="Login.php">login</a> </p>
                </div>
                
            </div>
        
    </section>
        
            
    </body>
</html>
