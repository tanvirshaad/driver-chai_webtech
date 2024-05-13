
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Login</title>
        <script type="text/javascript" src="../js/loginValidate.js"></script>
        <link rel="stylesheet" href="../styles/login.css">
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
        <section class="loginform">
            <form action="../Controller/credentials.php" method="POST" onsubmit="return loginValidate();" novalidate>
            <label for="uname">Username:</label>
            <input type="text" name="uname" id="username" />
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" />
            
            <br>
            <br>
            <div>
                
            </div>
            <input type="submit" name = "login" value="Login" class="btn">
            <br>
            <br>
            <a class="link" href="ForgotPass.php">Forgot Password?</a>
        </form>

        </section>
        
    </body>
</html>
