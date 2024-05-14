<?PHP
function createReview($sender, $reciever , $message)
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
    
        $sql = "INSERT INTO review (review, c_id, d_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        
        $stmt->bind_param("sii", $message, $sender, $reciever);

        
        if ($stmt->execute()) {
            echo "created";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            return false;
        }

        $stmt->close();
        $conn->close();
    
}



?>