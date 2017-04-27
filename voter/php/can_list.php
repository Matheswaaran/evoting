<?php

	$pres_list = mysqli_query($con,"SELECT * FROM presidential_candidates");
	// $pres_array = mysqli_fetch_array($pres_list);
	$pres_row = mysqli_num_rows($pres_list);

	$govr_list = mysqli_query($con,"SELECT * FROM governorship_candidates");
	// $govr_array = mysqli_fetch_array($govr_list);
	$govr_row = mysqli_num_rows($govr_list);

	$voter_list = mysqli_query($con,"SELECT * FROM voter WHERE approved = 0");
	// $voter_array = mysqli_fetch_array($voter_list);
	$voter_row = mysqli_num_rows($voter_list);
?>