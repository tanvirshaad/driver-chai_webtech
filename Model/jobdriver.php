<?php
function getSelfJobs($d_id)
{
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

    $sql = "SELECT j_id FROM jobdriver WHERE d_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $d_id);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

    $selfJobs = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($selfJobs, $row['j_id']);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $selfJobs;
}
?>