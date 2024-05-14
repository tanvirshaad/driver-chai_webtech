<?php
require '../Controller/getHistory.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver history</title>
    <link rel="stylesheet" href="../styles/driverhistory.css">

</head>
<body>
<div class="navbar">
                <div class="logo">
                    <ul>
                        <li><a href="">Driver Chai</a></li>
                    </ul>
                </div>
                <div class="navoption">
                    <ul><li><a href="driverwelcome.php">Home</a></li>
                        <li><a href="driverprofile.php">Profile</a></li>
                        <li><a href="createGig.php">Create Gig</a></li>
                        <li><a href="joblist.php">My Jobs</a></li>
                        <li><a href="driverHistory.php">Previous History</a></li>
                        <li><a href="refer.php">Refer a friend!</a></li>
                        <li><a class="disabled">Logged in as: <?php echo $_SESSION['username']; ?></a></li>
                        <li><a href="../controller/logout.php">Logout</a></li>
                    </ul>
                </div>
            </div>
    <h1>Total completed Jobs: </h1>
    <?php
    // print_r($userDetails);
    echo "<table border=1>";
        
        echo "<tr>";
            echo "<th>" . "Userid" . "</th>";
            echo "<th>" . "Username" . "</th>";
            echo "<th>" . "email" . "</th>";
            // echo "<th>" . "Name" . "</th>";
            // echo "<th>" . "Action" . "</th>";
            
        echo "</tr>";
        
            foreach($historyUser as $user)
            {
                // print_r($user);
                echo "<tr>";
                    echo "<td>" . $user[0]['id'] . "<br>" .  "</td>";
                    echo "<td>" . $user[0]['username'] . "<br>" .  "</td>";
                    echo "<td>" . $user[0]['email'] . "<br>" .  "</td>";
                    // echo "<td>" . "<form action='../Controller/driverJobList.php' method='POST' ><input type='hidden' name='userId' value='" .$user[0]['id'] . "'> <input type='submit' name='accept' value='Accept'>" . "</form></td>";
                    
                echo "<tr>";

            }
            
    echo "</table>";
    ?>
</body>
</html>