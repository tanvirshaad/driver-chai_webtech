<?php


function getAlluser()
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

    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    $allUsers = array();
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($allUsers, $row);
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    return $allUsers;
}

function loggedIn()
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

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

   
    $stmt->bind_param("s", $_SESSION['username']);

    
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
    return $row;
}

function forgotPass($username)
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
    $sql = "SELECT ans FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetching row
        $row = $result->fetch_assoc();
        return $row;

    }

    $stmt->close();
    $conn->close();


}

function changePass($username, $password)
{

	$servername = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "my_app";

	$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}

	$sql = "UPDATE users set password = '$password' where username = ?";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("s", $x);
	$x = $username;
	$result = $stmt->execute();
	if($result)
	{
	echo ".";

	}else
	{
		echo "Failed to update password";
	}

}

function createUser($fname, $lname, $email, $uname, $cpassword , $secQuestion , $ans, $role , $phone,  $refcode)
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
  
    $sql = "INSERT INTO users (firstName, lastName, email, username, password , secQuestion , ans, role , phone , refCode) VALUES (?, ?, ?, ?, ? ,?, ?, ? , ? , ?)";
    $stmt = $conn->prepare($sql);

    
    $stmt->bind_param("ssssssssss", $fname, $lname, $email, $uname, $cpassword, $secQuestion, $ans, $role , $phone , $refcode);

    
    if ($stmt->execute()) {
        return true;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        return false;
    }

    $stmt->close();
    $conn->close();

}
function getDriverID($uname)
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

    $sql = "SELECT id FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

   
    $stmt->bind_param("s", $uname);

    
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
    return $row['id'];

}

function createDriver( $age, $nid , $license , $exp , $id)
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
    
      $sql = "INSERT INTO drivers (age, nid, license, exp, id) VALUES (?, ?, ?, ?, ?)";
      $stmt = $conn->prepare($sql);
  
      
      $stmt->bind_param("iiisi", $age , $nid , $license , $exp , $id );
  
      
      if ($stmt->execute()) {
          return true;
      } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
          return false;
      }
  
      $stmt->close();
      $conn->close();


}

function credentials($username, $password)
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

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("s", $username);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Fetching row
        $row = $result->fetch_assoc();
        $uname = $row['username'];
        $pass = $row['password'];
        $role = $row['role'];
        // Check if the provided credentials match
        if ($username == $uname && $password == $pass) {
            return $role;
        } else {
            return $role;
        }
    } else {
        echo "0 results";
    }

    $stmt->close();
    $conn->close();
  }

  function updateUser($id, $uname , $fname, $lname, $password)
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
    
    
    $sql = "UPDATE users SET username = ?, firstName=?, lastName=?, password=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    
  
    $stmt->bind_param("ssssi",$uname, $fname, $lname, $password, $id);

    
    if ($stmt->execute()) {
        echo "User updated successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    
    $stmt->close();
    $conn->close();
}

function referCode($id)
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

    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param("s", $id);

    // Execute the statement
    $stmt->execute();

    // Store the result
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    $code = $row['refCode'];
    return $code;

}
    //tanvir
function getSpecificCustomerDetails($id)
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

    $sql = "SELECT * FROM users WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in preparing statement: " . $conn->error);
    }

    $stmt->bind_param("i", $id);

    if (!$stmt->execute()) {
        die("Error in executing statement: " . $stmt->error);
    }

    $result = $stmt->get_result();

    if (!$result) {
        die("Error in getting result: " . $stmt->error);
    }

    $users = array();
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            array_push($users, $row);
        }
    } else {
        echo "0 results";
    }
    $stmt->close();
    $conn->close();
    return $users;
}

function deleteUser($id)
{
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "my_app";

    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
 
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "DELETE FROM users WHERE id=?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $id);

    if ($stmt->execute()) 
    {
        echo "User deleted successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>


