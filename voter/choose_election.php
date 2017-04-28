<?php
  include 'php/includes/vsession.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>|| CHOOSE ELECTION SYSTEM ||</title>
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
    		<li> <a href="choose_election.php"> |  Home  |</a></li>
        <li><a href="profile.php">|  Profile  |</a></li>
    	</ul>
    </div>

    <?php if ($_SESSION['voter_approved'] == 1) { ?>
      
    <div id="content">
      <div id="left">
        <p align="right" style="text-align:center; color:#60B7DE;">	<a href="php/vlogout.php">LOGOUT</a></p>
      </div>
      <th height="41" colspan="2" scope="col">
        <h1>
          <strong><center><span class="style2">To Start Voting you must choose the Type of Election to start with</span>
          </center></strong>
        </h1>
      </th>
    	<p>&nbsp;</p>
    </div>
    <div id="footer">
      <table width="463" align="center">
        <tr>
          <td width="455" height="61">
            <table width="459" height="103" align="center">
              <tr>
                <td width="305" height="55"><div align="center" class="style8"><a href="presidential.php">PRESIDENTIAL ELECTIONS</a></div></td>
              </tr>
              <tr>
                <td height="40"><div align="center" class="style8"><a href="governorship.php">GOVERNORSHIP ELECTIONS</a></div></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
      <p>&nbsp;</p>
    	<p>&nbsp;</p>
        <p align="center">Copyright &copy; 2017 Designed by "Matheswaaran FOR PI(People with Innovations) Ltd" FOR 9025923103</p>
    </div>

    <?php }elseif ($_SESSION['voter_approved'] == 0) {?>
    <div id="content">
      <div id="left">
        <p align="right" style="text-align:center; color:#60B7DE;"> <a href="php/vlogout.php">LOGOUT</a></p>
      </div>
      <th height="41" colspan="2" scope="col">
        <h1>
          <strong><center><span class="style2">To Start Voting you must be approved from the Election Commission.</span>
          </center></strong>
        </h1>
      </th>
      <p>&nbsp;</p>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
      <p>&nbsp;</p>
        <p align="center">Copyright &copy; 2017 Designed by "Matheswaaran FOR PI(People with Innovations) Ltd" FOR 9025923103</p>
    </div>
    <?php } ?>
  </body>
</html>
