<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Home</title>
    <link rel="stylesheet" href="../styles/adminHome.css">
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
                <li><a href="Register.php">Register</a></li>
                <li><a href="#about">Logged In as: Admin</a></li>
            </ul>
        </div>
    </div>

<?php
require '../Controller/adminGigView.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Gig view</title>
</head>
<body>
    <h1>Total Gigs: <?php echo COUNT ($allGigs);?></h1>
    <?php
    
    ?>
</body>

<table border=1>
        <tr>
            <th>Username</th>
            <th>Title</th>
            <th>Hourly Rate</th>

        </tr>
        <?php foreach($allGigs as $gig): ?>
            <tr>
                
                <td><?php echo $gig['username']; ?></td>
                <td><?php echo $gig['title']; ?></td>
                <td><?php echo $gig['hourly_rate']; ?></td>
                <?php
                echo "<div>" . "<form action='../view/adminHome.php' <input type='submit' name='home' value='HOME'>" . "</form></div>";
                ?> 
            </tr>
        <?php endforeach; ?>
    </table>

</html>