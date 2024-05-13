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
            echo "<div>" . "<form action='../Controller/getSelfGig.php' method='POST' ><input type='hidden' name='g_id' value='" .$gigs['g_id'] . "'> <input type='submit' name='delete' value='Delete'>" . "</form></div>";

            echo "</div>";
        }
        echo '</div>';
    ?>
</body>
</html>