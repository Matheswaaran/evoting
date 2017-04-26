<?php
	session_start();
	include 'includes/dbconfig.php';
	include 'includes/SessionUtils.php';

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$username = $_POST["txtusername"];
		$password = $_POST["txtpassword"];
		// $password = md5($password);
		$login_err = "";

		$login_query = mysqli_query($con,"SELECT * FROM voter WHERE username = '$username' AND password = '$password'");
		$login_result = mysqli_num_rows($login_query);
		$login_array = mysqli_fetch_array($login_query, MYSQL_ASSOC);

		if ($login_query) {
			if ($login_result == 1) {
				$session = new SessionUtil();
				$session->VoterLogin($login_array['v_id'],$login_array['username'],$login_array['approved'],$login_array['gvoted'],$login_array['pvoted']);
				header("location: ../choose_election.html");
			}else{
				echo '<script> alert("Invalid credentials");</script>';
				// echo '<script> window.location="../vlogin.html"; </script>';
			}
		}else{
				echo '<script> alert("Login Error. Please Try Again.");</script>';
				// echo '<script> window.location="../vlogin.html"; </script>';
		}
	}
?>