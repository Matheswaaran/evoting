<?php
  include 'php/includes/esession.php';
  include 'php/can_list.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTERS APPROVAL ||</title>
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
    <li> <a href="choose_options.php"> | Home |</a></li>
    <li><a href="create_can.php">| CREATE CANDIDATE |</a></li>
    <li><a href="view_can.php">|  VIEW CANDIDATES  |</a></li>
    <li><a href="approve.php" >|  APPROVE VOTERS  |</a></li>
    <li><a href="gov_result.php" >|  GOV RESULTS  |</a></li>
    <li><a href="pres_result.php" >|  PR RESULTS  |</a></li>
  </ul>
</div>
<div id="content">
  <div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS E-VOTING SYSTEMIS FOR ELEGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2017
    </marquee></strong></p>
  </div>
  <div id="left">
    <p align="right" style="text-align:center; color:#60B7DE;"> <a href="php/elogout.php">LOGOUT</a></p>
  </div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
  </div>
</div>
<div id="footer">
  <table width="651" border="0" align="center">
    <tr>
      <th width="645" height="183" scope="col">
        <table width="667" height="31" border="0" align="center" bgcolor="#00FF00">
          <tr>
            <th width="607" scope="col"><div align="center"><span class="style4">PENDING LIST OF VOTERS</span></div></th>
          </tr>
        </table>
          <form action="php/approve_voter.php" method="post" >
            <table width="531" border="0" align="center" cellpadding="3" cellspacing="17">
              <tr>
                <th width="246" scope="col"><div align="justify">Select</div></th>
                <th width="246" scope="col"><div align="justify">Name</div></th>
                <th width="122" scope="col"><div align="justify">Age</div></th>
                <th width="246" scope="col"><div align="justify">Address</div></th>
                <th width="246" scope="col"><div align="justify">State</div></th>
                <th width="246" scope="col"><div align="justify">Country</div></th>
                <th width="246" scope="col"><div align="justify">Phone No.</div></th>
                <th width="246" scope="col"><div align="justify">District</div></th>
                <th width="246" scope="col"><div align="justify">Election-ID</div></th>
                <th width="246" scope="col"><div align="justify">Occupation</div></th>
              </tr>
              <?php $i = 1; while ($voter_array = mysqli_fetch_array($voter_list)) { ?>
              <tr>
                <td><div align="justify"><input type="checkbox" name="check[<?php $i ?>]" value="<?php echo $voter_array['v_id']?>"></div></td>
                <td><div align="justify"><?php echo $voter_array['firstname'] . " " . $voter_array['lastname']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['age']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['address1'] . " " . $voter_array['address2']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['state']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['country']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['phone']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['election_district']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['election_id']; ?></div></td>
                <td><div align="justify"><?php echo $voter_array['occupation']; ?></div></td>
              </tr>
              <?php } ?>
              <tr>
                <td></td>
              </tr>
            </table>
            <div align="justify"><input type="submit" name="approve" value="approve"></div>
          </form>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
</div>
</body>
</html>
