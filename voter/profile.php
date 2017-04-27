<?php
  include 'php/includes/vsession.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTER PROFILE ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {font-size: 18px; font-weight: bold; }
.style13 {font-size: x-large; font-weight: bold; color: #000000; }
.style2 { color: #FF00FF;
  font-weight: bold;
}
.style3 {
  font-size: 18px;
  color: #000000;
}
.style4 {font-size: 18px; color: #FFFFFF; }
.style5 {font-size: 12px}
-->
</style>
</head>
<body>
<div id="header">
  <table width="200" align="center">
    <tr>
      <td height="212"><img src="../images/header1.jpg" alt="" width="770" height="210" /></td>
    </tr>
  </table>
</div>
<div id="menu">
  <ul>
    <li> <a href="choose_election.php"> |  Home  |</a></li>
    <li><a href="profile.php">|  Profile  |</a></li>
  </ul>
</div>
<div id="content">
  <div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS E-VOTING SYSTEMIS FOR ELEGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2017
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
  </div>
</div>
<div id="footer">
  <table width="651" border="0" align="center">
    <tr>
      <th width="645" height="783" scope="col">
        <table width="667" height="31" border="0" align="center" bgcolor="#00FF00">
          <tr>
            <th width="607" scope="col"><div align="center"><span class="style4"><?php echo $user_array['username']; ?> PROFILE </span></div></th>
          </tr>
        </table>
          <form action="php/vregister.php" method="post" id="form1">
            <table width="431" border="0" align="center" cellpadding="3" cellspacing="17">
              <tr>
                <th width="122" scope="col"><div align="justify">FIRSTNAME</div></th>
                <th width="246" scope="col"><div align="justify"><?php echo $user_array['firstname']; ?></div></th>
              </tr>
              <tr>
                <td><div align="justify">LASTNAME</div></td>
                <td><div align="justify"><?php echo $user_array['lastname']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">SEX</div></td>
                <td><div align="justify"><?php echo $user_array['sex']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">AGE</div></td>
                <td><div align="justify"><?php echo $user_array['age']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">ADDRESS Line 1</div></td>
                <td><div align="justify"><?php echo $user_array['address1']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">ADDRESS Line 2</div></td>
                <td><div align="justify"><?php echo $user_array['address2']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">STATE</div></td>
                <td><div align="justify"><?php echo $user_array['state']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">COUNTRY</div></td>
                <td><div align="justify"><?php echo $user_array['country']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">PHONE</div></td>
                <td><div align="justify"><?php echo $user_array['phone']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">E-MAIL</div></td>
                <td><div align="justify"><?php echo $user_array['email']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">PREFERED ELECTION DISTRICT </div></td>
                <td><div align="justify"><?php echo $user_array['election_district']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">ELECTION - ID </div></td>
                <td><div align="justify"><?php echo $user_array['election_id']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">OCCUPATION</div></td>
                <td><div align="justify"><?php echo $user_array['occupation']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">USERNAME</div></td>
                <td><div align="justify"><?php echo $user_array['username']; ?></div></td>
              </tr>
              <tr>
                <td><div align="justify">PASSWORD</div></td>
                <td><div align="justify"><a href="changepass.php">CHANGE PASSWORD</a></div></td>
              </tr>
            </table>
          </form></th>
    </tr>
  </table>
  <p>Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
</div>
</body>
</html>
