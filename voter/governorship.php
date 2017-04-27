<?php
  include 'php/includes/vsession.php';
  include 'php/can_list.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
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
.style8 {color: #990000}
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
		<li> <a href="index.php"> |  Home  |</a></li>
		<li>
		  <a href="login.php">|  Voting  |</a></li>
		<li>
		  <a href="result.php">|  Result  |</a></li>
		<li>
		  <a href="login.php" >|  Login  |</a></li>
		<li>
		  <a href="contact.php">|  Contact Us  |</a></li>
	</ul>
</div>
<div id="content">
	<div id="left">
    <p style="text-align:center; color:#FF0000;"><strong><marquee  behavior="scroll">
    THIS VOTING SYSTEM IS FOR ELEGIBLE NIGERIAN WHO ARE ABOVE 18 YEARS OF AGE AS FROM 23RD JUNE 2012 
    </marquee></strong></p>
</div>
  <th height="41" colspan="2" scope="col"><h1><center>
   </center>
   
   </h1></th>
</div>
</div>
<div id="footer">
  <p><a href="php/vlogout.php">LOGOUT</a></p>
          <form action="php/vregister.php" method="post" id="form1">
            <table width="671" border="0" align="center">
                <tr>
                  <th width="233" bgcolor="#00FF66" scope="col" align="center"><span class="style8">VOTE</span></th>
                  <th width="197" bgcolor="#00FF66" scope="col" align="center"><span class="style8">NAME</span></th>
                  <th width="149" bgcolor="#00FF66" scope="col" align="center"><span class="style8">PARTY</span></th>
                </tr>
                <?php while ($govr_array = mysqli_fetch_array($govr_list)) {?>
                <tr>
                  <td height="151"><input type="radio" name="vote" value="<?php echo $govr_array['gc_id'] ?>"></td>
                  <td><?php echo $govr_array['cand_name']; ?></td>
                  <td><?php echo $govr_array['party']; ?></td>
                </tr>
                <?php } ?>
                <tr>
                  <td><div align="justify"><input type="submit" name="vote" value="vote"></div></td>
                </tr>
              </table>
          </form></th>
    </tr>
  </table>
	<p>&nbsp;</p>
	<p align="center">Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
</div>
</body>
</html>
