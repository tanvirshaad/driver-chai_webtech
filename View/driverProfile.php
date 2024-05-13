<?php
// session_abort();
// session_start();
require '../Controller/credentials.php';
// require '../Controller/getSelfGig.php';
// require '../Controller/driverJobList.php';
require '../Controller/driverProfile.php';
$currentUser = loggedIn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
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
                <li><a href="../index.php">Home</a></li>
                <li><a href="Register.php">Profile</a></li>
                <li><a class="disabled">Logged in as: <?php echo $_SESSION['username']; ?></a></li>
            </ul>
            <!-- <a href="#about">About</a> -->
        </div>
    </div>
    <div class="section">
        <h1>Welcome <?php echo $_SESSION['username']; ?></h1>
        <!-- <?php print_r($currentUser) ?> -->
      
      
            <br>
            <label for="fname">First Name:</label>
            <?php echo $currentUser['firstName'];?> 
            <br>
         
            
            <label for="lname">Last Name:</label>
            <?php echo $currentUser['lastName'];?>
            <br>
            <label for="uname">User Name:</label>
            <?php echo $currentUser['username'];?>
            <br>
            <label for="gigcount">Total Gig:</label>
            <?php
             if(count($selfgigs))
             {
                echo count($selfgigs);
             }
             else
             {
                echo '0';
             }
             
            ?>
            <br>
          
            
            <br>
            <br>
     

    </div>
</body>
</html>