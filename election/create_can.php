<?php
  include 'php/includes/esession.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| CREATE CANDIDATE ||</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="../default.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
.style11 {font-size: 18px; font-weight: bold; }
.style13 {font-size: x-large; font-weight: bold; color: #000000; }
.style2 {	color: #FF00FF;
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
      <th width="645" height="383" scope="col">
        <table width="667" height="31" border="0" align="center" bgcolor="#00FF00">
          <tr>
            <th width="607" scope="col"><div align="center"><span class="style4">CREATE GOVERNORSHIP CANDIDATE FORM </span></div></th>
          </tr>
        </table>
          <form action="php/govr_can.php" method="post" id="form1">
            <table width="431" border="0" align="center" cellpadding="3" cellspacing="17">
              <tr>
                <th width="122" scope="col"><div align="justify">Candidate Name</div></th>
                <th width="246" scope="col"><div align="justify"><input type="text" name="candidatename" id="candidatename"/></div></th>
              </tr>
              <tr>
                <td><div align="justify">Party</div></td>
                <td><div align="justify"><label>
                    <select name="party" id="party">
                      <option value="AIADMK">AIADMK</option>
                      <option value="DMK">DMK</option>
                      <option value="MDMK">MDMK</option>
                      <option value="DMDK">DMDK</option>
                    </select>
                  </label></div></td>
              </tr>
              <tr>
                <td><input type="submit" name="Submit" value="Register" /></td>
                <td>&nbsp;</td>
              </tr>
            </table>
          </form></th>
    </tr>
  </table>

  <table width="651" border="0" align="center">
    <tr>
      <th width="645" scope="col">
        <table width="667" border="0" align="center" bgcolor="#00FF00">
          <tr>
            <th width="607" scope="col"><div align="center"><span class="style4">CREATE PRESIDENTIAL CANDIDATE FORM </span></div></th>
          </tr>
        </table>
          <form action="php/pres_can.php" method="post" id="form1">
          <table width="431" border="0" align="center" cellpadding="3" cellspacing="17">
            <tr>
              <th width="122" scope="col"><div align="justify">Candidate Name</div></th>
              <th width="246" scope="col"><div align="justify"><input type="text" name="candidatename" id="candidatename"/></div></th>
            </tr>
            <tr>
              <td><div align="justify">Party</div></td>
              <td><div align="justify"><label>
                    <select name="party" id="party">
                      <option value="AIADMK">AIADMK</option>
                      <option value="DMK">DMK</option>
                      <option value="MDMK">MDMK</option>
                      <option value="DMDK">DMDK</option>
                    </select>
                  </label></div></td>
            </tr>            
            <tr>
              <td><input type="submit" name="Submit" value="Register" /></td>
              <td>&nbsp;</td>
            </tr>
          </table>
        </form></th>
      </tr>
    </table>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
</div>
</body>
</html>
