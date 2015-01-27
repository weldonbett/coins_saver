<?php
session_start();

if (isset($_POST['submit'])) 
{ 			

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="okoa"; // Database name
$tbl_name="users"; // Table name

// Connect to server and select databse.
mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$username=$_POST['username'];
$password=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql="SELECT * FROM $tbl_name WHERE user='$username' and pass='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row

// If result matched $myusername and $mypassword, table row must be 1 row


// Register $myusername, $mypassword and redirect to file "login_success.php"
    $row=  mysql_fetch_array($result);
    
    
   
    if($row['user']==$username && $row['pass']==$password ){
	
	
	$_SESSION['username'] = $username;
	if($row['user']==manager){
	
	
        header("location:admin.php");
		
		}
		else 
		{
		 header("location:cashier.php");
		}
		
    }


else {?>





<script language="javascript" type="text/javascript">
alert ('wrong password or username.Try again!')
 window.location.href="http://localhost/okoa/index.php"; 
</script>


<?php
 
}
ob_end_flush();















								
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Exploitable 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20090327

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

		<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
		
		 <link rel="stylesheet" href="que/jquery-ui.css">
		 
  <script src="que/jquery-1.9.1.js"></script>
  <script src="que/jquery-ui.js"></script>
  
  
  
  
  
  
<script type="text/javascript" src="JQuery/jquery.js"></script>
<script type="text/javascript" src="JQuery/jquery.validate.js"></script>
<script type="text/javascript">

$(document).ready(function() {
		$('form').submit(function() {
		if($('input[name=username]').val().length < 1) {
				$('.username').html('<b><font color="#FF0000"><br>enter username! </font></b>');
				return false;
			} 
			else {
				$('.username').hide();
			}
			if($('input[name=password]').val().length < 1) {
				$('.password').html('<b> <font color="#FF0000"><br>fill in password!</font></b>');
				return false;
			} 
			else {
				$('.password').hide();
			}
	
			
		});
	});

</script>
  
  <meta name="keywords" content="" />
  
  
  
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>OSS</title>



</head>
<body>
<font color="#000000" >
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><img src="image/kk.png" /></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#BBBBBB">
<tr>
<form name="loginFrm" method="post" action="index.php" id="form1">
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="1" bgcolor="#BBBBBB">
<tr>
<p colspan="3"><strong><h4 align="center">
PLEASE LOG IN. </h4> </strong></td>
</tr>
<tr>
<p><label width="78">&nbsp;&nbsp;Username:&nbsp;&nbsp;</label>
<input name="username" type="text" id="username" maxlength="20">
<span class='error username'></span>
</p>
</tr>
<tr>
<p><label>&nbsp;&nbsp;Password:&nbsp;&nbsp;&nbsp;&nbsp;</label><input name="password" type="password" id="password" maxlength="20">
<span class="error password"></span>
</p>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<p align="center"><input type="submit" name="submit" value="Login"></p>
</tr>
</table>
</form>




</td></tr>
</table>


			</div>
			</div>
			</div>
			</div>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer">
	<br /><br /><br />
	<br /><br /><br />
	<br /><br /><br />
		<br />
	<br /><br />		<br />
	<br />

	<p><font color="#000000" >Developed by kip.</font></p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
