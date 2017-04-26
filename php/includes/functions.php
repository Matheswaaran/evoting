<?php

$connect=mysql_connect('localhost',DBUSER,DBPASS);
mysql_select_db(DATABASE);


function query($que){
	if(!$check = mysql_query($que))
	{
	echo '<h4> an error occured '.mysql_error(). '</h4>';
	echo '<p>error: '.mysql_error(). '</p>';
	echo '<p>SQL:'.$que.'</p>';
	exit;
	}	
	else return $check;
	}
function insert($data){
	
    if(empty($data['txtfirstname'])) return 'Please enter your Firstname';
	if(empty($data['txtlastname'])) return 'Please choose your Lastname ';
	if(empty($data['txtsex'])) return 'Please choose your Sex';
	if(empty($data['txtaddress'])) return 'Please enter your Address';
	if(empty($data['txtlga'])) return 'Please enter your city';
	if(empty($data['txtstate'])) return 'Please enter your state ';
	if(empty($data['txtcountry'])) return 'Please enter your country';
	if(empty($data['txtemail'])) return 'Please enter E-mail';
	if(empty($data['txtphone'])) return 'Please enter your Phone';
	if(empty($data['txtage'])) return 'Please enter your Age';
	if(empty($data['txtelectiondist'])) return 'Please choose your election district';
	if(empty($data['txtusername'])) return 'Please choose a username';
	if(empty($data['txtoccupation'])) return 'Please choose your occupation'; 
	
//check if username already exist
$fname = $data['txtusername'];
if($chk = mysql_query("select username from voter where username ='$fname'"));
$numrows = mysql_num_rows($chk);
if($numrows > 0) return 'USERNAME ALREADY EXIST, CHOOSE ANOTHER USERNAME';

		
if(mysql_query("INSERT INTO voter (firstname,lastname,sex,age,address,lga,state,country,phone,email,election_district,occupation,username,election_id) values('".$_POST['txtfirstname']."','".$_POST['txtlastname']."','".$_POST['txtsex']."','".$_POST['txtage']."','".$_POST['txtaddress']."','".$_POST['txtlga']."','".$_POST['txtstate']."','".$_POST['txtcountry']."','".$_POST['txtphone']."','".$_POST['txtemail']."','".$_POST['txtelectiondist']."','".$_POST['txtoccupation']."','".$_POST['txtusername']."','".$_POST['txtelectionid']."')")){

return ' YOUR REGISTRATION WAS SUCCESSFUL';}
else return 'YOUR REGISTRATION WAS NOT SUCCESSFUL';
}

function login($log){
	if(empty($log['txtusername'])) return 'Username is empty,Kindly insert your Username';
	if(empty($log['txtelectionid'])) return 'Election ID is empty,Kindly insert your Election ID';
	
	$uname = $log['txtusername'];
	$pass =  $log['txtelectionid'];
	if($result = query("SELECT username,election_id FROM voter WHERE username = '$uname' AND election_id = '$pass'"));

	$numrows = mysql_num_rows($result);
	
	if($numrows == 1){
// Register $myusername, $mypassword and redirect to file "browse_page.php"
session_register("txtusername");
session_register("txtelectionid");
header("location: choose_election.php");
return 'you have successfully login';
}
else 
	{return 'Invalid Login-in';}
	}

function get_pres_vote(){
	$get = query('SELECT cand_name,party,pres_count FROM presidential_votes');
	while($var = mysql_fetch_assoc($get))
	{
	$yes[] = $var;
	}
	return $yes;
		}
		
	function get_gov_vote(){
	$gets = query('SELECT cand_name,party,gov_count FROM governorship_votes');
	while($vars = mysql_fetch_assoc($gets))
	{
	$yess[] = $vars;
	}
	return $yess;
	
	}
	?>