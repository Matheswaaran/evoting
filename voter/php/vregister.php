<?php
	include 'includes/dbconfig.php';
	session_start();

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$first_name = $_POST['txtfirstname'];
		$last_name = $_POST['txtlastname'];
		$sex = $_POST['txtsex'];
		$age = $_POST['txtage'];
		$address1 = $_POST['txtaddress1'];
		$address2 = $_POST['txtaddress2'];
		$state = $_POST['txtstate'];
		$country = $_POST['txtcountry'];
		$phone = $_POST['txtphone'];
		$email = $_POST['txtemail'];
		$election_dist = $_POST['txtelectiondist'];
		$election_id = $_POST['txtelectionid'];
		$occupation = $_POST['txtoccupation'];
		$username = $_POST['txtusername'];
		$password = $_POST['txtpassword'];
		$repassword = $_POST['txtrepassword'];

		$reg_check_sql = mysqli_query($con, "SELECT v_id FROM voter WHERE username = '$username'");
		$reg_check_result = mysqli_num_rows($reg_check_sql);

		if ($reg_check_result == 1) {
			echo '<script> alert("Username already available");</script>';
			header('Refresh:1 ; URL=../vregistration.html');
		}else{
			if ($password == $repassword) {
				// $password = md5($password);
				$reg_query = "INSERT INTO voter(firstname,lastname,sex,age,address1,address2,state,country,phone,email,election_district,election_id,occupation,username,password) VALUES('$first_name','$last_name','$sex','$age','$address1','$address2','$state','$country','$phone','$email','$election_dist','$election_id','$occupation','$username','$password')";
				if (mysqli_query($con, $reg_query) == true ) {
					echo '<script> alert("Registration Successful");</script>';
					echo '<script> window.location="../vlogin.html"; </script>';
				}else{
					echo '<script> alert("Registration Error. Please try Again.");</script>';
					echo '<script> window.location="../vregistration.html"; </script>';
				}
			}else{
				echo '<script> alert("Password does not match");</script>';
				echo '<script> window.location="../vregistration.html"; </script>';
			}
		}
	}
?>