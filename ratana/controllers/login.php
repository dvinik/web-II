<?php

	$username = $_POST["username"];
	$password = $_POST["password"];

	if($username == "admin" && $password == "admin"){
		session_start();
		$_SESSION['user']= $username;  
		header("Location: ../index.php");
        die("Redirecting to: index.php");
	}else{
		echo "Login failed.";
	}

?>