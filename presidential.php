<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>|| VOTING REGISTRATION SYSTEM||</title>
<script type="text/javascript">
function confirm_vote(textfield){
if(confirm("ARE U SURE YOU WISH TO VOTE FOR "+textfield+" ?"))
{
return  true;
}
else {return false;
}
	 
}

function error($msg){
if(confirm("double voting "+$msg+" ?"))
{
return  true;
}
else {return false;
}
	 
}
</script>

<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css" />
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
      <td height="212"><img src="images/header1.jpg" alt="" width="770" height="210" /></td>
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
   
   </h1>
  </th>
</div>
<div id="footer">
  <p><a href="logout.php">LOGOUT</a></p>
  <table width="719" border="0" align="center">
    <tr>
      <th width="713" height="661" scope="col"><form id="form1" method="post" action="">
          <table width="671" border="0" align="center">
            <tr>
              <th width="233" bgcolor="#00FF66" scope="col"><span class="style8">CANDIDATE</span></th>
              <th width="197" scope="col"><span class="style8">NAME</span></th>
              <th width="149" bgcolor="#00FF66" scope="col"><span class="style8">PARTY</span></th>
              <th width="74" bgcolor="#993300" scope="col">UPDATED RESULT </th>
            </tr>
            <tr>
              <td height="151"><img src="images/contact1.jpg" alt="" width="177" height="218" /></td>
              <td>MRS CYNTHIA ALABA </td>
              <td><input type="submit" name="Submit" value="ANPP"  onclick="return confirm_vote('<?php echo "MRS CYNTHIA ALABA AS PRESIDENT ";  ?>')" /></td>
              <td><?php echo $names;  ?>&nbsp;</td>
            </tr>
            <tr>
              <td height="150"><img src="images/1.jpg" alt="" width="180" height="182" /></td>
              <td>PROF. ELIJAH AMINU </td>
              <td><input type="submit" name="Submit2" value="PDP" onclick="return confirm_vote('<?php echo "PROF. ELIJAH AMINU AS PRESIDENT ";  ?>')"/></td>
              <td><?php echo $names2;  ?></td>
            </tr>
            <tr>
              <td height="105"><img src="images/contact3.jpg" alt="" width="178" height="183" /></td>
              <td>DECONESS SALOME SEUN (JP.) </td>
              <td><input type="submit" name="Submit3" value="ACN" onclick="return confirm_vote('<?php echo "DECONESS SALOME SEUN (JP.)  AS PRESIDENT ";  ?>')"/></td>
              <td><?php echo $names3;  ?></td>
            </tr>
            <tr>
              <td height="105">&nbsp;</td>
              <td>&nbsp;</td>
              <td><a href="pres_result.php">click here to view all parties result </a></td>
              <td>&nbsp;</td>
            </tr>
          </table>
      </form></th>
    </tr>
    <tr>
      <th height="17" scope="col">&nbsp;</th>
    </tr>
  </table>
  <p>&nbsp;</p>
	<p>&nbsp;</p>
	<p align="center"> Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
</div>
</body>
</html>