<?php
session_start();
require '../Model/review.php';
require '../Model/connect.php';
$loggedin = loggedIn();
$cusId = $loggedin['id'];
if(isset($_POST['submit']))
{
    $driId = $_POST['driverId'];
    $mssg = $_POST['review'];
    createReview($cusId, $driId , $mssg);
    echo "Driver review added";
    
}


?>