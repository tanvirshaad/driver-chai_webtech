<?php
require '../Controller/driverJobList.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs</title>
</head>
<body>
    <h1>Total Job:  <?php echo count($userDetails); ?></h1>

    <?php
    // print_r($userDetails);
    echo "<table border=1>";
        
        echo "<tr>";
            echo "<th>" . "Userid" . "</th>";
            echo "<th>" . "Username" . "</th>";
            echo "<th>" . "email" . "</th>";
            // echo "<th>" . "Name" . "</th>";
            echo "<th>" . "Action" . "</th>";
            
        echo "</tr>";
        
            foreach($userDetails as $user)
            {
                // print_r($user);
                echo "<tr>";
                    echo "<td>" . $user[0]['id'] . "<br>" .  "</td>";
                    echo "<td>" . $user[0]['username'] . "<br>" .  "</td>";
                    echo "<td>" . $user[0]['email'] . "<br>" .  "</td>";
                    echo "<td>" . "<form action='../Controller/driverJobList.php' method='POST' ><input type='hidden' name='userId' value='" .$user[0]['id'] . "'> <input type='submit' name='accept' value='Accept'>" . "</form></td>";
                    
                echo "<tr>";

            }
            
    echo "</table>";
    ?>
</body>
</html>