<?php
	include 'dbconfig.php';
	session_start();

	try{
		$user_check = $_SESSION['voter_username'];
		$ses_sql = mysqli_query($con,"SELECT * FROM voter WHERE username = '$user_check'");
		$user_array = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
		$login_session = $user_array['username'];

		if (!isset($_SESSION['voter_id']) && !isset($_SESSION['voter_username']) && !isset($_SESSION['voter_gvoted']) && !isset($_SESSION['voter_pvoted']) && !isset($_SESSION['voter_approved'])) {
			// header("location: vlogin.html");
		}	
	}catch(exception $e){
		echo '<script> alert("' . $e . '"");</script>';
	}
?>