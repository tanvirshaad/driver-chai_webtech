<?php

session_start();
require '../Model/connect.php';
require '../Model/job.php';
$loggedin = loggedIn();
$ongoingJobs = ongoing($loggedin['id']);
if(isset($_POST['complete']))
{
    jobComplete($loggedin['id'] , $_POST["g_id"]);

}

?>