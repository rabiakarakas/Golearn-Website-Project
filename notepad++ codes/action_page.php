<?php

include ("baglan.php");

    if(empty($_POST['name']) && empty($_POST['email']) && empty($_POST['password'])){

        echo "Please fill in the fields";

    }else{
        $name= $_POST['name'];
        $email= $_POST ['email'];
		$password = $_POST['password'];

        echo ('Welcome:     '. $name. '<br/>');
        echo ('This is your email address:'   . $email. '<br/>');
	
	$query = "INSERT INTO users(name,email,password) VALUES ('$name'","'$email'","'$password')";
    if (mysqli_query($conn, $query)) {
		
        echo "New record created successfully !";
    } else {
         echo "Error inserting record: " . $conn->error;
	}
	
}
?>