<?php

require '../Controller/update.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../styles/update,.css">
</head>
<body>
    <div class="navbar">
                <div class="logo">
                    <ul>
                        <li><a href="">Driver Chai</a></li>
                    </ul>
                </div>
                <div class="navoption">
                    <ul><li><a href="welcome.php">Home</a></li>
                        <li><a href="customerGigView.php">Search Drivers</a></li>
                        <li><a href="customerHistory.php">Hiring History</a></li>
                        <li><a href="customerOngoingjob.php">hired drivers</a></li>
                        <li><a href="customerNotification.php">Notification</a></li>
                        <li><a href="trackVehicle.php">Track Vehicle</a></li>
                        <li><a href="refer.php">Refer a friend!</a></li>
                        <li><a class="disabled">Logged in as: <?php echo $_SESSION['username']; ?></a></li>
                        <li><a href="../controller/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
    <form action="../Controller/update.php" method="post" novalidate>
        
            <label for="uname">For the Username: </label>
            <input type="text" name="uname" id="" value="<?php echo $loggedIn['username']; ?>" />
            <br>
            <br>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="" value="<?php echo $loggedIn['firstName']; ?>" />
            <br>
            <br>
            
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="" value="<?php echo $loggedIn['lastName'];?>" />
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="" value="<?php echo $loggedIn['password'];?>"/>
            <br>
            <br>
            <input type="hidden" name="id" value = "<?php $loggedIn['id']?>">
            <br>
            <br>
            <input type="submit" name="update" value="update">
    </form>
</body>
</html>