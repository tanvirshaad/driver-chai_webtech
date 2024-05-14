<?php

session_start();
require '../Model/gig.php';

$selfgigs = getSelfGig($_SESSION['userId']);

if(isset($_POST['delete']))
{
    if(deleteGig($_POST["g_id"]))
    {
        header('Location: http://localhost/project/View/selfgigs.php');
    }

}

?>