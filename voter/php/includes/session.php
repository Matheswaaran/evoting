<?php
	include 'dbconfig.php';
	session_start();

	try{
		$user_check = $_SESSION['voter_username'];
		$ses_sql = mysqli_query($con,"SELECT username FROM voter WHERE username = '$user_check'");
		$row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
		$login_session = $row['username'];

		if (!isset($_SESSION['voter_username'])) {
			// header("location: vlogin.html");
		}	
	}catch(exception $e){
		echo '<script> alert("' . $e . '"");</script>';
	}
?>