<?php

require '../Controller/credentials.php';

$_SESSION['userId'] = $currentUser['id'];

if (!isset($_SESSION['username'])) {
		header("Location: Login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/welcome.css">
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
            <section class="content">
                <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
                <button class="btn"><a  href="../Controller/logout.php">Logout</a></button>
                <br>
                <br>
    <a class="update" href="update.php">Update user details</a>

            </section>
    
</body>
</html>