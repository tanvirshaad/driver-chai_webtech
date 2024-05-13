<?php
require '../Model/gig.php';
require '../Model/job.php';
require '../Model/jobdriver.php';
require '../Model/connect.php';
session_start();
$d_id = $_SESSION['userId'];
$selfJobs = getSelfJobs($d_id);
// echo $selfJobs;
$userDetails = array();
// print_r(getSpecificCustomerDetails(12));
foreach($selfJobs as $selfjob)
{
    $j_id = $selfjob;
    if(getRequestedCustomer($j_id, 'pending'))
    {
        $c_id = getRequestedCustomer($j_id, 'pending');
        print_r($c_id);
        array_push($userDetails, getSpecificCustomerDetails($c_id[0]));
        print_r($userDetails);
    }
    else
    {
        
    }
    
}


if(isset($_POST['accept']))
{
    $status = 'accepted';
    $id = $_POST['userId'];
    updateJobStatus($status, $id);
}

?>