<?php
session_start();
require '../Model/connect.php';
$loggedIn = loggedIn();
if(isset($_POST['update']))
{
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $uname = $_POST['uname'];
        $id = $loggedIn['id'];
        $password = $_POST['password'];
        updateUser($id, $uname ,$fname, $lname, $password);
        echo '<br><label for="bd">Go back to</label>'.'<a href = "../view/welcome.php"> home page </a>';
    }
}
?>