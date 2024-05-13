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
    <?php
    foreach($allGigs as $gig)
    {
        echo $gig['title'];
    }
    ?>
</body>
</html>