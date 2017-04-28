<?php

	$pvote_sql = mysqli_query($con,"SELECT cand_name,party,count(*) as votes FROM presidential_votes GROUP BY cand_name,party");

	// $pvote_array = mysqli_fetch_array($pvote_sql);

	$gvote_sql = mysqli_query($con,"SELECT cand_name,party,count(*) as votes FROM governorship_votes GROUP BY cand_name,party");

	// $gvote_array = mysqli_fetch_array($gvote_sql);

?>