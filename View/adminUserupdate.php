<?php

require '../Controller/adminUserupdate.php';
print_r($user);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="../styles/update,.css">
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
                        <li><a href="#about">About</a></li>
                    </ul>
                </div>
            </div>
    <form action="../Controller/adminUserupdate.php" method="post" novalidate>
        
            <label for="uname">For the Username: </label>
            <input type="text" name="uname" id="" value="<?php echo $user['username']; ?>" />
            <br>
            <br>
            <label for="fname">First Name:</label>
            <input type="text" name="fname" id="" value="<?php echo $user['firstName']; ?>" />
            <br>
            <br>
            
            <label for="lname">Last Name:</label>
            <input type="text" name="lname" id="" value="<?php echo $user['lastName'];?>" />
            <br>
            <br>
            <label for="password">Password:</label>
            <input type="password" name="password" id="" value="<?php echo $loggedIn['password'];?>"/>
            <br>
            <br>
            <input type="hidden" name="id" value = "<?php $loggedIn['id']?>">
            <br>
            <br>
            <input type="submit" name="update" value="update">
    </form>
</body>
</html>