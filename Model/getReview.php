<?php

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    // Create connection
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM review WHERE d_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

    $selfreview = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($selfreview, $row);
    }
    } else {
    echo "0 results";
    }
    $conn->close();


?>