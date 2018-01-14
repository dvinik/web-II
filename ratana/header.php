<?php 
	header('Content-Type: text/html; charset=utf-8');
	if (!isset($_SESSION)) session_start();
	if (empty($_SESSION['user'])) { 
	    header("Location: login.php");
	    die("Redirecting to login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<style>
	.user_name{
		float: right;
	}
	</style>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
	<link href="css/sb-admin.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>	
	<div class="container">
		<div class="row" id="nav_top">
			<div class="col-sm-2" style="color: white">Bakery and Coffee</div>
			<div class="col-sm-10">
				<ul class="nav nav-pills">
				  <!-- <li role="presentation"><a href="#">Home</a></li> -->
				  <li role="presentation"><a href="index.php" class="nav_text top_menu" menu="Dashboard">Dashboard</a></li>
				  <li role="presentation"><a href="inventory.php" class="nav_text top_menu" menu="Inventory">Inventory</a></li>
				  <li role="presentation"><a href="expense.php" class="nav_text top_menu" menu="Expense">Expense</a></li>
				  <li role="presentation"><a href="revenue.php" class="nav_text top_menu" menu="Revenue">Revenue</a></li>
				  <!-- <li role="presentation"><a href="#">Client</a></li> -->
				  <li role="presentation"><a href="report.php" class="nav_text top_menu" menu="Report">Report</a></li>
				  <li role="presentation"><a href="#" class="nav_text top_menu" menu="Setting">Setting</a></li>
				  	<div class="user_name">
				  		<label style="color:white; margin-top: 10px;">Ratana</label>
						  <?php 
						  		if(isset($_SESSION["user"])){
						  			echo "<a href='controllers/logout.php' id='logout'> Log out</a>";
						  		}
						  ?>
					</div>
				</ul>
				
			</div>
		</div>
		
		
