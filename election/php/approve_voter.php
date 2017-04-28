<?php
  include 'includes/dbconfig.php';

  if(isset($_POST['approve'])){
  	echo $_POST['check'];
    if(isset($_POST['check'])){
      foreach ($_POST['check'] as $value){
        $approve_sql = mysqli_query($con,"UPDATE voter SET approved = 1 WHERE v_id = $value");
        if ($approve_sql) {
        	echo '<script> alert("Voter(s) Approved.");</script>';
			echo '<script> window.location="../approve.php"; </script>';
        }
      }
    }
  }
?>    