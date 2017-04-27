<?php
  include 'php/includes/esession.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>|| ELECTION COMMISSION HOME ||</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="../default.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
      <!--
      .style2 {
      	color: #000000;
      	font-size: 16px;
      }
      .style8 {color: #0000FF; font-weight: bold; font-size: 16px; }
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
        <!-- <li><a href="../contact.html">|  Contact Us  |</a></li> -->
    	</ul>
    </div>
    <div id="content">
      <div id="left">
        <p align="right" style="text-align:center; color:#60B7DE;">	<a href="php/elogout.php">LOGOUT</a></p>
    </div>
       <th height="41" colspan="2" scope="col"><h1><center>
            <span class="style2">To Start Voting you must choose one of the following to start with</span>
       </center></strong></h1></th>
    	<p>&nbsp;</p>
    </div>
    </div>
    <div id="footer">
      <table width="463" align="center">
        <tr>
          <td width="455" height="61">
            <table width="459" height="103" align="center">
              <tr>
                <td width="305" height="55"><div align="center" class="style8"><a href="create_can.php">CREATE CANDIDATE</a></div></td>
              </tr>
              <tr>
                <td height="40"><div align="center" class="style8"><a href="view_can.php">VIEW CANDIDATES</a></div></td>
              </tr>
              <tr>
                <td height="40"><div align="center" class="style8"><a href="approve.php">APPROVE VOTERS</a></div></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
    	<p>&nbsp;</p>
    	<p>Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
    </div>
  </body>
</html>
