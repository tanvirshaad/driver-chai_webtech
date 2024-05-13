<?php

session_start();
require '../Model/gig.php';

$selfgigs = getSelfGig($_SESSION['userId']);

if(isset($_POST['delete']))
{
    deleteGig($_POST["g_id"]);

}

?>