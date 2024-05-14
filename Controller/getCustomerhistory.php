<?php
session_abort();
session_start();
require '../Model/job.php';
require '../Model/connect.php';
$loggedin = loggedIn();
$c_id = $loggedin['id'];
$cusHistory = getCustomerHistory($c_id);
$customerHistory = array();
foreach($cusHistory as $history)
{
    
    array_push($customerHistory, getSpecificCustomerDetails($history['id']));
    
}

if(isset($_POST['feedback']))
{
    header('Location: http://localhost/project/View/driverreview.php');
    $_SESSION['driverId'] =  $_POST['driverId'];
    
}

?>