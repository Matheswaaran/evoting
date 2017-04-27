<?php
  include 'includes/dbconfig.php';

  if(isset($_POST['approve'])){
    if(isset($_POST['check'])){
      foreach ($_POST['check'] as $value){
        mysqli_query($con,"UPDATE voter SET approved = 1 WHERE v_id = $value");
      }
    }
  }
?>    