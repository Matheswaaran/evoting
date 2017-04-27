<?php
  include "includes/dbconfig.php";
  if(isset($_POST['approve'])) {
    if(isset($_POST['check'])){
      foreach ($_POST['check'] as $value){
        echo $value;
        $sql = "update user_details set is_approved ='1' where UserId = '$value'"; 
        mysql_query($sql) or die (mysql_error());
        $sql = "select other_country from user_details where UserId = '$value'"; 

        $result = mysql_query($sql) or die (mysql_error());
        if($Other_country_name = mysql_fetch_assoc($result)) {
          $Other_country_name = $Other_country_name['other_country'];
        }
        $sql = "insert into country_table set name = '$Other_country_name'";
        mysql_query($sql) or die (mysql_error());
      }
    }
  }
?>     