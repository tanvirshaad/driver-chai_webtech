<?php
session_start();
require '../Model/connect.php';

if(isset($_POST['delete'])) {
    if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        $id = $_POST['id'];

        deleteUser($id);

        header("Location: http://localhost/project/view/adminHome.php");
        exit();
    }
}
?>