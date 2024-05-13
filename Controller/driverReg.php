<?php
session_start();
require '../Model/connect.php';

if(isset($_POST['drivRegister']))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $uname = $_POST['uname'];
        $_SESSION['driverRegUname'] = $uname;
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
            createUser($fname, $lname, $email, $uname, $cpassword , $secQuestion , $ans, $role , $phone , $refCode);
            header('Location: http://localhost/project/View/driverRegister2.php');
        }
        else
        {
            $_SESSION['passwordmatched'] = "Password does not match";
            header('Location: http://localhost/project/View/Register.php');
        }
    }
    
}

if(isset($_POST['drivRegister2']))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $age = $_POST['age'];
        $nid = $_POST['nid'];
        $license = $_POST['license'];
        $exp = $_POST['exp'];
        $id = getDriverID($_SESSION['driverRegUname']);

        createDriver( $age, $nid , $license , $exp , $id);
        header('Location: http://localhost/project/View/Login.php');

    }
    
}


?>