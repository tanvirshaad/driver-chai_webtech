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
                    <ul>
                        <li><a href="../index.php">Profile</a></li>
                        <li><a href="selfGigs.php">My Gigs</a></li>
                        
                    </ul>
                </div>
            </div>
            <div class="section">
                <h1>Create your Gig</h1>
                <form action="../Controller/createGig.php" method="POST">
                <label for="title">Title: </label>
                <input type="text" name="title" id="">
                <br>
                <br>
                <label for="car_type">Car Type: </label>
                <select name="car_type" id="car_type">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
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