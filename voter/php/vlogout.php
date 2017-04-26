<?php
	include 'includes/SessionUtils.php';

	$session = new SessionUtil();
	if ($session->Logout()) {
		echo '<script> window.location="../vlogin.html"; </script>';
	}
?>