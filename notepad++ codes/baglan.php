
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//database connection

 $conn = new mysqli('localhost','root','', 'golearn');
 
 if ($conn->connect_error) {

        die('Connection Failed: ' . $conn->connect_error);
		
    }else{
		$stmt = $con->prepare("insert into users(name, email, password) 
		values (?,?,?)");
		$stmt->bind_param("sssssi", $name, $email, $password);
		$stmt->execute();
		echo "Registration Successfully...";
		$stmt->close();
		$conn->close();
		
	}
?>
