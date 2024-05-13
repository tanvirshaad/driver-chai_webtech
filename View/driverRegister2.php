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
                    <form action="../Controller/driverReg.php" method="POST" onsubmit="return registerValidate();">
                    <br>
                    <br>
                    <label for="age">Age:</label>
                    <input type="text" name="age" id="age" />
                    <br>
                    <br>
                    <label for="nid">NID Number:</label>
                    <input type="text" name="nid" id="nid" />
                    <br>
                    <br>
                    <label for="license">Driving License Number:</label>
                    <input type="text" name="license" id="license" />
                    <br>
                    <br>
                    <label for="exp">Years of Experience:</label>
                    <select name="exp" id="exp">
                    <option value="0-5">0-5 Years</option>
                    <option value="5-10">5-10 Years</option>
                    <option value="10-15">10-15 Years</option>
                    <option value="15">15+ Years</option>
                    </select>
                    <br>
                    <br>
                    <?php echo $passerrmsg;  ?>
                    <br>
                    <input type="submit" name="drivRegister2" value="drivRegister2" class="btn">
                </form>
            <p>Already have an account? go to <a href="Login.php">login</a> </p>
                </div>
                
            </div>
        
    </section>
        
            
    </body>
</html>
