<?php

require '../Controller/refer.php'



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Drivers</title>
    <link rel="stylesheet" href="../styles/refer.css">
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
                        <li><a href="../View/welcome.php">Home</a></li>
                        <li><a href="Register.php">Register</a></li>
                        <li><a href="../View/refer.php">Bring a friend</a></li>
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
            </div>
    <form action="../Controller/refer.php" method="post" novalidate>
            <h1>Refer a friend today!</h1>
            <h5>Refer your friends and family on driver chai to recieve upto 200tk discount coupon!</h5>
            <table>
            <tr>
            <td> <input type="submit" name="refer" value="Get Code" class = "btn"> </td>
            </tr>
            <tr>
            <td><label for="refCode">Referal Code: </label>
            <input type="text" name="refCode" id="refCode" , value = "<?php echo isset($_GET['ref']) ? $_GET['ref'] : ""; ?>">
            </tr>
            </table>
    </form>
</body>
</html>