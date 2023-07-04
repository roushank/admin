<?php
 include('../constant/connect.php');
 $sql_head_title = "select * from manage_website"; 
 $result_head_title = $con->query($sql_head_title);
 $row_head_title = mysqli_fetch_array($result_head_title);
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.php');
	exit;
}


// In this case we can use the account ID to get the account info.


       


        
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $row_head_title['title'];?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link href="../../assets/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navtop">
			<div>
				<h1><?php echo $row_head_title['title'];?></h1>
				<!--<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a> -->
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
    
