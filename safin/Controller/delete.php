<?php
session_start();
require '../Model/connect.php';

if(isset($_POST['delete'])) {
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        // Get the user ID from the form
        $id = $_POST['id'];
        
        // Call the deleteUser function with the user ID
        deleteUser($id);
        
        // Redirect the user back to the home page or wherever appropriate
        header("Location: ../view/welcome.php");
        exit();
    }
}
?>