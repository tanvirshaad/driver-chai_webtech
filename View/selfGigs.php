<?php
require '../Controller/getSelfGig.php';
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
    <title>Self Gigs</title>
    <link rel="stylesheet" href="../styles/selfGigs.css">
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
                    <li><a href="../index.php">Profile</a></li>
                    <li><a href="createGig.php">Create Gig</a></li>
                    <li><a href="jobList.php">My Jobs</a></li>
                    <li><a class="disabled">Logged in as: <?php echo $_SESSION['username']; ?></a></li>
                    
                </ul>
            </div>
        </div>
        <div class="section">
            <h1>Total Gigs: <?php  echo count($selfgigs); ?></h1>
            <?php
                echo '<div class="gigs-section">';
                foreach($selfgigs as $gigs)
                {
                    echo '<div class = "item">';
                    echo "<h3>" . $gigs['title'] . "</h3>";
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
                    echo "<div>" . "<form action='../Controller/getSelfGig.php' method='POST' ><input type='hidden' name='g_id' value='" .$gigs['g_id'] . "'> <input type='submit' class='btn' name='delete' value='Delete'>" . "</form></div>";
                    echo "</div>";
                }
                echo '</div>';
            ?>
        </div>

</body>
</html>