<?php
session_abort();
session_start();
require '../Model/gig.php';
require '../Model/job.php';
$c_id = $_SESSION['userId'];
//echo $c_id;
if(jobCidCheck($c_id))
{
$gigsIds = getGid($c_id);
#print_r($gigsIds);
//print_r($gigsIds);
if($gigsIds)
{
    foreach($gigsIds as $id)
    {
        $allAvailableGigs = getAllAvailableGigs($id['g_id']);
       # print_r($allAvailableGigs);
        echo "upore kaj hoise";
    }    
}
}
else
{
    $allAvailableGigs = getgigsfornewcustomer();
    echo "niche kaj hoise";
}



if(isset($_POST['request']))
{
    $g_id = $_POST['g_id'];
    $status = "pending";
    createNewJob($g_id, $c_id, $status);
    $d_id = getGigCreator($g_id);
    $j_id = getCurrentJobId();
    bindDriverWithJob($j_id, $d_id, $c_id);
    header('Location: http://localhost/project/View/hired.php');
}
?>