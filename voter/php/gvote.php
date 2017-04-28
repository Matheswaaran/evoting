<?php
	
	include 'includes/dbconfig.php';
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$id = $_POST['vote'];
		$gc_list = mysqli_query($con,"SELECT * FROM governorship_candidates WHERE gc_id = $id");
		$gc_array = mysqli_fetch_array($gc_list);
		if ($gc_list) {
			$gc_sql = "INSERT INTO governorship_votes(cand_name,party,v_id) VALUES('" . $gc_array["cand_name"] . "','" . $gc_array["party"] . "','" . $_SESSION["voter_id"] . "')";
			$gc_vote = mysqli_query($con,$gc_sql);
			if ($gc_vote) {
				$update_voted = mysqli_query($con,"UPDATE voter SET gvoted = 1 WHERE v_id = '" . $_SESSION["voter_id"] . "' AND username = '" . $_SESSION["voter_username"] . "'");
				if ($update_voted) {
					echo '<script> alert("Your Vote has been recorded");</script>';
					echo '<script> window.location="vlogout.php"; </script>';
				}
			}
		}
	}
?>