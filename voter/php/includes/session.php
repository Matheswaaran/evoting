<?php
	include 'dbconfig.php';
	session_start();

	try{
		$user_check = $_SESSION['login_user'];
		$ses_sql = mysqli_query($con,"SELECT username FROM admin_table WHERE username = '$user_check'");
		$row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
		$login_session = $row['username'];

		if (!isset($_SESSION['login_user'])) {
			header("location: login.html");
		}	
	}catch(exception $e){
		echo '<script> alert("' . $e . '"");</script>';
	}
	
?>