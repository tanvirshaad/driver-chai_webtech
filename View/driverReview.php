<?php
//session_start();
require '../Controller/credentials.php';

$_SESSION['userId'] = $currentUser['id'];
//array_push($user, '$currentUser');
//echo $user;
if (!isset($_SESSION['username'])) {
		header("Location: Login.php");
		exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/review.css">
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
            <div class="container">
            <div class="row">
            <div class="revlab">
            <label for="review">Write Driver Review:</label>
            </div>
            <div class="rev">
            <textarea id="review" name="review" placeholder="Write a review" style="height:200px"></textarea>
            </div>
            </div>
            <br>
            <div class="row">
            <input type="submit" class="submit" value="Submit">
            </div>
            </form>
            </div>
    

    <?php print_r($_SESSION); ?>
            </section>
    
</body>
</html>