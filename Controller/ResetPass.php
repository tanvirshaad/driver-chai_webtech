<?php
session_start();
require '../Model/connect.php';

if(isset($_POST['fpass']))
{
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {   
        $uname = $_POST['uname'];
        $secQuestion = $_POST['secQuestion'];
        $ans = $_POST['ans'];
        $newPass = $_POST['newPassword'];
        $cPassword = $_POST['cpassword'];

    }

    $cAns = forgotPass($uname);
    if($cAns > 0)
    {
        if(!empty($uname) && !empty($newPass) && $newPass === $cPassword)
        {
            changePass($uname , $newPass );
            echo "Password has been reset Successfully." .'<a href="../view/Login.php">Go back to login page</a>';
        }else
        {
            echo "Passwords do not match or wrong username" .'<a href="ForgotPass.php">Try Again</a>';
        }
    }else
    {
        echo "Secret Question Answer Wrong!" .'<a href="ForgotPass.php">Try Again</a>';
    }
    
}
?>