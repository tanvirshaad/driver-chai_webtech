<?php
require '../Controller/getCustomerhistory.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver history</title>
    <link rel="stylesheet" href="../styles/customerHistory.css">
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
    <?php
    //print_r($customerHistory);
    echo "<table border=1>";
        
        echo "<tr>";
            echo "<th>" . "Userid" . "</th>";
            echo "<th>" . "Username" . "</th>";
            echo "<th>" . "email" . "</th>";
            // echo "<th>" . "Name" . "</th>";
            // echo "<th>" . "Action" . "</th>";
            
        echo "</tr>";
        
            foreach($customerHistory as $user)
            {
                // print_r($user);
                echo "<tr>";
                    echo "<td>" . $user[0]['id'] . "<br>" .  "</td>";
                    echo "<td>" . $user[0]['username'] . "<br>" .  "</td>";
                    echo "<td>" . $user[0]['email'] . "<br>" .  "</td>";
                     echo "<td>" . "<form action='../Controller/getCustomerhistory.php' method='POST' ><input type='hidden' name='driverId' value='" .$user[0]['id'] . "'> <input type='submit' name='feedback' value='Provide Feedback'>" . "</form></td>";
                    
                echo "<tr>";

            }
            
    echo "</table>";
    ?>
</body>
</html>