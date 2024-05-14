<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Gig</title>
    <link rel="stylesheet" href="../styles/createGig.css">
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
            <div class="section">
                <h1>Create your Gig</h1>
                <form action="../Controller/createGig.php" method="POST" novalidate>
                <label for="title">Title: </label>
                <input type="text" name="title" id="">
                <br>
                <br>
                <label for="car_type">Car Type: </label>
                <select name="car_type" id="car_type">
                <option value="Sedan">Sedan</option>
                    <option value="SUV">SUV</option>
                    <option value="Coupe">Coupe</option>
                     <option value="Sport">Sport</option>
                    <option value="Crossover">Crossover</option>
                    <option value="Hatchback">Hatchback</option>
                    <option value="Wagon">Wagon</option>
                    <option value="Minivan">Minivan</option>
                </select>
                <br>
                <br>
                <label for="hourly_rate">Hourly Rate: </label>
                <input type="text" name="hourly_rate" id="">
                <br>
                <br>
                <input class="btn" type="submit" value="Submit">
            </div>
    
        
    </form>
</body>
</html>
                <!-- <?php 
                session_start();
                print_r($_SESSION); ?> -->