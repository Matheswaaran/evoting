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
    		<li> <a href="choose_election.php"> |  Home  |</a></li>
    	</ul>
    </div>

    <?php if ($_SESSION['voter_gvoted'] == 0) { ?>

    <div id="content">
      <div id="left">
        <p align="right" style="text-align:center; color:#60B7DE;"> <a href="php/vlogout.php">LOGOUT</a></p>
      </div>
      <th height="41" colspan="2" scope="col">
        <h1>
          <strong><center><span class="style2">To Submit Vote you must choose any one of the Candidates and press Submit</span></center></strong>
        </h1>
      </th>
      <p>&nbsp;</p>
    </div>
    <div id="footer">
      <p>&nbsp;</p>
      <form action="php/gvote.php" method="post" id="form1">
        <table width="671" border="0" align="center">
          <tr>
            <th width="33" bgcolor="#00FF66" scope="col" align="center"><span class="style8">VOTE</span></th>
            <th width="197" bgcolor="#00FF66" scope="col" align="center"><span class="style8">IMAGE</span></th>
            <th width="149" bgcolor="#00FF66" scope="col" align="center"><span class="style8">PARTY</span></th>
            <th width="149" bgcolor="#00FF66" scope="col" align="center"><span class="style8">PARTY</span></th>
          </tr>
          <?php while ($govr_array = mysqli_fetch_array($govr_list)) {?>
          <tr>
            <td height="151"><input type="radio" id="vote" name="vote" value="<?php echo $govr_array['gc_id'] ?>"></td>
            <td><?php echo $govr_array['cand_name']; ?></td>
            <td><?php echo $govr_array['party']; ?></td>
          </tr>
          <?php } ?>
          <tr>
            <td><div align="justify"><input type="submit" name="submit" value="submit"></div></td>
          </tr>
        </table>
      </form>
  	  <p>&nbsp;</p>
  	  <p align="center">Copyright &copy; 2011 Designed by "Ndueso Walter FOR LEASTPAY SOLUTIONS LTD" FOR 08067361023</a></p>
    </div>
    <?php }elseif ($_SESSION['voter_gvoted'] == 1) { ?>
      <div id="content">
        <div id="left">
          <p align="right" style="text-align:center; color:#60B7DE;"> <a href="php/vlogout.php">LOGOUT</a></p>
        </div>
        <th height="41" colspan="2" scope="col">
          <h1>
            <strong><center><span class="style2">You Have Already Submitted your Vote. Thank You.</span></center></strong>
          </h1>
        </th>
        <p>&nbsp;</p>
      </div>
    <?php } ?>
  </body>
</html>
