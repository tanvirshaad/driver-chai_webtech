<?php

session_start();
require '../Model/connect.php';
require '../Model/job.php';
$loggedin = loggedIn();
$acceptedJobs = getAcceptedJobs($loggedin['id']);
if(isset($_POST['confirm']))
{
    hired($loggedin['id'] , $_POST["g_id"]);

}

?>