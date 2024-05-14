<?php
require '../Controller/adminHome.php'; 
?>
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
    <h1>Total user: <?php echo count($allUsers); ?></h1>
    <table border=1>
        <tr>
            <th>Userid</th>
            <th>Username</th>
            <th>Email</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
        <?php foreach($allUsers as $user): ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td><?php echo $user['firstName'] . " " . $user['lastName']; ?></td>
                <td>
                  <?php
                echo "<div>" . "<form action='../Controller/adminUserupdate.php' method='POST' ><input type='hidden' name='id' value='" .$user['id'] . "'> <input type='submit' name='update' value='Update'>" . "</form></div>";  
                echo "<div>" . "<form action='../Controller/delete.php' method='POST' ><input type='hidden' name='id' value='" .$user['id'] . "'> <input type='submit' name='delete' value='Delete'>" . "</form></div>";
                ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
