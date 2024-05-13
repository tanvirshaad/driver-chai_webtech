<?php
session_start();

require '../Controller/customerGigView.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Gig View</title>
    <script type="text/javascript" src="../js/searchGig.js"></script>
    <link rel="stylesheet" href="../styles/customergigView.css">
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
            <section class="content">
            <input type="text" id="myInput" onkeyup="gigSort()" placeholder="Search for names..">

                <ul id="myUL">
                <?php
                if(!empty($allAvailableGigs))
                {
                    foreach($allAvailableGigs as $gigs)
                {
                echo '<li><a href="#">
                        <div class = "result">
                        <div class = "left">
                        <h3>'.$gigs['username'].'</h3>

                        <p>'.$gigs['title'].'<p>
                        
                        <h5>'."Car Type: ".$gigs['car_type'].'</h5>
                        
                        
                        </div>
                        <div class = "right">
                        <h2>'."Hourly Rate: ".$gigs['hourly_rate']." -/".'</h2>
                        <form action="../Controller/customerGigView.php" method="POST" ><input type="hidden" name="g_id" value="' .$gigs['g_id'] . '"> 
                        <input type="submit" id = "submit" name="request" value="Send Request">' . '</form>
                        
                        </div>
                        </div>
                        </a></li>';}
                }
                else
                {
                        echo "0 results";
                }
                
                
                ?>
                </ul>
            </section>
            
    
</body>
</html>