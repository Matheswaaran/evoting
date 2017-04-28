<?php
	
	include 'includes/dbconfig.php';
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = $_POST['vote'];
		$pc_list = mysqli_query($con,"SELECT * FROM presidential_candidates WHERE pc_id = $id");
		$pc_array = mysqli_fetch_array($pc_list);
		if ($pc_list) {
			$pc_sql = "INSERT INTO presidential_votes(cand_name,party,v_id) VALUES('" . $pc_array["cand_name"] . "','" . $pc_array["party"] . "','" . $_SESSION["voter_id"] . "')";
			$pc_vote = mysqli_query($con,$pc_sql);
			if ($pc_vote) {
				$update_voted = mysqli_query($con,"UPDATE voter SET pvoted = 1 WHERE v_id = '" . $_SESSION["voter_id"] . "' AND username = '" . $_SESSION["voter_username"] . "'");
				if ($update_voted) {
					echo '<script> alert("Your Vote has been recorded");</script>';
					echo '<script> window.location="vlogout.php"; </script>';
				}
			}
		}
	}
?>