<?php
  include 'php/includes/esession.php';
  include 'php/eresult.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| GOVERNORSHIP RESULT ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
	font-size: 16px;
}
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
    THIS E-VOTING SYSTEM IS FOR ELEGIBLE INDIAN WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2017
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p class="style1"><a href="php/elogout.php">LOGOUT</a></p>
  <p class="style1">UPDATED GOVERNORSHIP RESULT  </p>
  <table width="743" height="93" border="1" align="center" cellpadding="7" cellspacing="0" bgcolor="#999999">
    <tr>
      <th width="263" height="56" scope="col" align="center">CANDIDATE NAME </th>
      <th width="215" scope="col" align="center" >PARTY</th>
      <th width="215" scope="col" align="center">VOTES</th>
    </tr>
    <?php while ($gvote_array = mysqli_fetch_array($gvote_sql)) { ?>
    <tr>
      <td  style=""><?php echo $gvote_array['cand_name']; ?></td>
      <td  style=""><?php echo $gvote_array['party']; ?></td>
      <td  style=""><?php echo $gvote_array['votes']; ?> </td>
    </tr>
    <?php } ?>
  </table>
        <p align="center">Copyright &copy; 2017 Designed by "Matheswaaran FOR PI(People with Innovations) Ltd" FOR 9025923103</p>
</div>
</body>
</html>
