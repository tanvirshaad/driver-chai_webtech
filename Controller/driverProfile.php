<?php
require '../Model/gig.php';
require '../Model/jobdriver.php';

// session_start();
$d_id = $_SESSION['userId'];
$selfJobs = getSelfJobs($d_id);

$selfgigs = getSelfGig($_SESSION['userId']);

?>