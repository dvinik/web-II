<?php

	$username = $_POST["username"];
	$password = $_POST["password"];

	if($username == "admin" && $password == "admin"){
		session_start();
		// Store Session Data
		$_SESSION['user']= $username;  // Initializing Session with value of PHP Variable
		// echo $_SESSION['login_user'];
		header("Location: ../index.php");
        die("Redirecting to: index.php");
	}else{
		echo "Login failed.";
	}

?>