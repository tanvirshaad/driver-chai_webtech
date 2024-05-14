<?php

require '../Controller/customerOngoingjob.php';

//$_SESSION['userId'] = $currentUser['id'];
//array_push($user, '$currentUser');
//echo $user;
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
    <link rel="stylesheet" href="../styles/notification.css">
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
                        <li><a href="customerHistory.php">Previous Hiring History</a></li>
                        <li><a href="customerNotification.php">Notification</a></li>
                        <li><a href="trackVehicle.php">Track Vehicle</a></li>
                        <li><a href="refer.php">Refer a friend!</a></li>
                        <li><a href="Register.php">Profile</a></li>
                        <li><a class="disabled">Logged in as: <?php echo $_SESSION['username']; ?></a></li>
                    </ul>
                    <!-- <a href="#about">About</a> -->
                </div>
            </div>
            <div class="section">
            <h1>Total Gigs: <?php  echo count($ongoingJobs); ?></h1>
            <?php
                echo '<div class="gigs-section">';
                foreach($ongoingJobs as $gigs)
                {
                    echo '<div class = "item">';
                    echo "<h3>" . $gigs['username'] . "</h3>";
                    // echo "<br>";
                    echo "<h5>" . "Car Type: " . $gigs['car_type'] . "</h5>";
                    echo "<h2>" . "Hourly Rate: " . $gigs['hourly_rate'] . "</h2>";
                    if($gigs['available'])
                    {
                        echo "Staus: Available";
                    }
                    else{
                        echo "Staus: Unavailable";
                    }
                    echo "<div>" . "<form action='../Controller/customerOngoingjob.php' method='POST' ><input type='hidden' name='g_id' value='" .$gigs['g_id'] . "'> <input type='submit' class='btn' name='complete' value='Mark as Complete'>" . "</form></div>";
                    echo "</div>";
                }
                echo '</div>';
            ?>
            </div>
    <?php print_r($_SESSION); ?>
            </section>
    
</body>
</html>