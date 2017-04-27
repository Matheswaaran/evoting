<?php
	include 'dbconfig.php';
	session_start();

	try{
		$user_check = $_SESSION['election_username'];
		$ses_sql = mysqli_query($con,"SELECT * FROM goverment_users WHERE username = '$user_check'");
		$row = mysqli_fetch_array($ses_sql, MYSQL_ASSOC);
		$login_session = $row['username'];

		if (!isset($_SESSION['election_id']) && !isset($_SESSION['election_username']) && !isset($_SESSION['election_email'])) {
			header("location: elogin.html");
		}	
	}catch(exception $e){
		echo '<script> alert("' . $e . '"");</script>';
	}
	
?>