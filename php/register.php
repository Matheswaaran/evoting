<?php
	include 'includes/dbconfig.php';
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$repassword = $_POST['repassword'];

		$reg_check_sql = mysqli_query($con, "SELECT username FROM admin_table WHERE username = '$username'");
		$reg_check_result = mysqli_fetch_array($reg_check_sql);

		if ($reg_check_result) {
			echo '<script> alert("Username already available");</script>';
			header('Refresh:1 ; URL=../login.html');
		}else{
			if ($password == $repassword) {
				$password = md5($password);
				$reg_query = "INSERT INTO admin_table(first_name,last_name,username,password,emailid) VALUES('$first_name','$last_name','$username','$password','$email')";
				if (mysqli_query($con, $reg_query) == true ) {
					echo '<script> alert("Registration Successful");</script>';
					$_SESSION['login_user'] = $username;
					echo '<script> window.location="../home.php"; </script>';
				}else{
					echo '<script> alert("Registration Error. Please try Again.");</script>';
					echo '<script> window.location="../login.html"; </script>';
				}
			}else{
				echo '<script> alert("Password does not match");</script>';
				echo '<script> window.location="../login.html"; </script>';
			}
		}
	}
?>