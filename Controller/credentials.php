<?php
session_start();
require '../Model/connect.php';
$currentUser = loggedIn();

if(isset($_POST['register']))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $secQuestion = $_POST['secQuestion'];
        $ans = $_POST['ans'];
        $role = $_POST['role'];
        $phone = $_POST['phone'];
        $refCode = $_POST['refCode'];
        if($password == $cpassword)
        {
            $_SESSION['passwordmatched'] = "";
            createUser($fname, $lname, $email, $uname, $cpassword , $secQuestion , $ans, $role , $phone, $refCode);
            header('Location: http://localhost/project/View/Login.php');
        }
        else
        {
            $_SESSION['passwordmatched'] = "Password does not match";
            header('Location: http://localhost/project/View/Register.php');
        }
    }
    
}

if(isset($_POST['login']))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {   
        $username = $_POST['uname'];
        $password = $_POST['password'];
        if(credentials($username, $password))
        {   
            $role = credentials($username, $password);
            if($role == 'driver')
            {
                $_SESSION['username'] = $username;
                header('Location: http://localhost/project/View/driverwelcome.php');

            }
            else if($role == 'customer')
            {
                $_SESSION['username'] = $username;
                header('Location: http://localhost/project/View/welcome.php');
            }
       
        }
        else
        {
            echo "wrong";
        }
    }
}

?>