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
    <script type="text/javascript" src="../js/trackVehicle.js"></script>
    <link rel="stylesheet" href="../styles/trackVehicle.css">
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
                    <!-- <a href="#about">About</a> -->
                </div>
            </div>
            <section class="content">
                <div id="map"></div>
                <br>
                <img src = "map.png">

    <!-- <?php print_r($_SESSION); ?> -->
            </section>
    
</body>

</html>