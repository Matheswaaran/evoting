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

	function image($party)
	{
		$result = "";
		if($party == "All India Anna Dravida Munnetra Kalagam (AIADMK)"){
			$result = "../images/aiadmk.png";
		}
		if($party == "Dravida Munnetra Kalagam (DMK)"){
			$result = "../images/dmk.png";
		}
		if($party == "Marumalarchi Dravida Munnetra Kazhagam (MDMK)"){
			$result = "../images/mdmk.png";
		}
		if($party == "Desiya Murpokku Dravida Kazhagam (DMDK)"){
			$result = "../images/dmdk.png";
		}

		echo $result;
	}
?>