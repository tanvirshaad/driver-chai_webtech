<?php
session_start();
require '../Model/connect.php';
$loggedIn = loggedIn(); 
$id = $loggedIn['id'];

if(isset($_POST['refer']))
{
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $refCode = referCode($id);
        if(!empty($refCode))
        {
            header("Location: ../View/refer.php?ref=" . $refCode);
        }
		else
        {
            echo "Refcode Empty";
         }

        
    }
}
?>