<?php
session_start();
require '../Model/connect.php';
// $loggedIn = loggedIn();

if(isset($_POST['update']))
{
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $user=getSpecificCustomerDetails($_POST['id']);
        print_r($user);
        $fname = $user['firstName'];
        $lname = $user['lastName'];
        $uname = $user['username'];
        $id = $user['id'];
        $password = $user['password'];
        updateUser($id, $uname ,$fname, $lname, $password);
        echo '<br><label for="bd">Go back to</label>'.'<a href = "../view/welcome.php"> home page </a>';
    }
}
?>