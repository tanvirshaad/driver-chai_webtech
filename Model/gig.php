<?php
function createGig($userId, $username, $title, $hourly_rate, $car_type, $available)
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
  
    $sql = "INSERT INTO gigs (id, title, username, car_type , hourly_rate, available) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("isssis", $userId, $title, $username, $car_type, $hourly_rate, $available);

    
    if ($stmt->execute()) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        return false;
    }

    $stmt->close();
    $conn->close();

}

function getSelfGig($id)
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

    $sql = "SELECT * FROM gigs WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $id);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

    $selfgigs = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($selfgigs, $row);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $selfgigs;

}

function getgigsfornewcustomer()
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

    $sql = "SELECT * FROM gigs WHERE available = ?";
    $stmt = $conn->prepare($sql);
    $availability = 1;
    $stmt->bind_param("s", $availability);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

    $availableGigs = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($availableGigs, $row);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $availableGigs;

}

function getGid($id)
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

    $sql = "SELECT g_id FROM jobs WHERE c_id = ?";
    $stmt = $conn->prepare($sql);
    $availability = 1;
    $stmt->bind_param("i", $id);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

    $gigIds = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($gigIds, $row);
    }
    } else {
     return false;
    }
    $conn->close();
    return $gigIds;

}

function getAllAvailableGigs($gid)
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

    $sql = "SELECT * FROM gigs WHERE available = ? AND NOT g_id = ?";
    $stmt = $conn->prepare($sql);
    $availability = 1;
    $stmt->bind_param("si", $availability , $gid);
    
    $stmt->execute();

  
    $result = $stmt->get_result();

    $availableGigs = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($availableGigs, $row);
    }
    } else {
     return false;
    }
    $conn->close();
    return $availableGigs;
}

function getAllGigs()
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

    $sql = "SELECT * FROM gigs";
    $result = $conn->query($sql);
    $allGigs = array();
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($allGigs, $row);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $allGigs;
}

function deleteGig($g_id)
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

    $sql = "DELETE FROM gigs WHERE g_id=?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $g_id);

    // Execute statement
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }

    // Close statement and connection
    $stmt->close();
    $conn->close();
}

function getGigCreator($g_id)
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

    $sql = "SELECT id FROM gigs WHERE g_id = ?";
    $stmt = $conn->prepare($sql);

   
    $stmt->bind_param("i", $g_id);

    
    $stmt->execute();

  
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetching row
        $row = $result->fetch_assoc();

    } else {
        echo "0 results";
    }

    $stmt->close();
    $conn->close();
    $gigCreatedBy = $row['id']; 
    return $gigCreatedBy;
}
?>