<?php
	session_start();
	include 'includes/dbconfig.php';
	include 'includes/SessionUtils.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["txtusername"];
		$password = $_POST["txtpassword"];
		// $password = md5($password);
		$login_err = "";

		$login_query = mysqli_query($con,"SELECT * FROM goverment_users WHERE username = '$username' AND password = '$password'");
		$login_result = mysqli_num_rows($login_query);
		$login_array = mysqli_fetch_array($login_query, MYSQL_ASSOC);

		if ($login_query) {
			if ($login_result == 1) {
				$session = new SessionUtil();
				$session->ElectionLogin($login_array['gu_id'],$login_array['username'],$login_array['email']);
				header("location: ../choose_options.php");
			}else{
				echo '<script> alert("Invalid credentials");</script>';
				echo '<script> window.location="../elogin.html"; </script>';
			}
		}else{
				echo '<script> alert("Login Error. Please Try Again.");</script>';
				echo '<script> window.location="../elogin.html"; </script>';
		}
	}
?>