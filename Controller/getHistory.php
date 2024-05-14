<?php
session_start();
require '../Model/job.php';
require '../Model/connect.php';

$status = 'completed';
$d_id = $_SESSION['userId'];
$users = getHistory($status, $d_id);
$historyUser = array();
foreach($users as $user)
{
    array_push($historyUser, getSpecificCustomerDetails($user['c_id']));
    
}
print_r($historyUser);

?>