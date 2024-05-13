<?php 
session_start();
require '../Model/gig.php';

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $userId = $_SESSION['userId'];
    $username = $_SESSION['username'];
    $title = $_POST['title'];
    $hourly_rate = $_POST['hourly_rate'];
    $car_type = $_POST['car_type'];
    $available = true;
    createGig($userId, $username, $title, $hourly_rate, $car_type, $available);
}

?>