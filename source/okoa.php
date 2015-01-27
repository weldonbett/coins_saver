
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

</script><head>
		
		 <link rel="stylesheet" href="que/jquery-ui.css">
  <script src="que/jquery-1.9.1.js"></script>
  <script src="que/jquery-ui.js"></script>
  
  <meta name="keywords" content="" />
  
  
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>OSS</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">TUSKYS  </a></h1>
			
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Blog</a></li>
			<li><a href="#">Photos</a></li>
			<li><a href="#">About</a></li>
			<li><a href="#">Links</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<!-- end #menu -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">

		
		
		<br />
   <table><tr><td>
		<form action="okoa.php" method="post">
   <label for="autocomplete" >Account no.: </label> &nbsp;

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="acno"  id="autocomplete" />   <script>
$( "#autocomplete" ).autocomplete({




source:[<?php
// Fill up array with names

				
                $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("okoa", $db);
               
           


$result=mysql_query("SELECT*FROM account");



 
while($row=mysql_fetch_array($result))

{


?>

"<?
echo $row['acno'];






?>",
<?


}

 
mysql_close();


?>]



});
</script>
</td>
</tr><tr></tr><tr></tr><tr></tr>
<tr></tr>
<tr></tr><tr>
			
			</tr><tr><td>
			
			
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		  	  &nbsp;&nbsp;
	<input name ="submit" type="submit"  value="save!"/>
	
	   </form>

</td></tr></table>
		
		
		<br><br><br><br><br><br><br>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		
		
		
		
		
		
		
		
		
		
		
		 
 
 
 
 
<?php 
if(isset($_POST['submit']))
{

$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("okoa",$db);



$acno=$_POST['acno'];



// import balance value

session_start();
	
	
		  $cc=$_SESSION['cc'];



$save=0;

$queryy = "SELECT value FROM account 	WHERE acno='$acno' "; 
	 
$resultww = mysql_query($queryy) or die(mysql_error());


// Print out result
while($row = mysql_fetch_array($resultww)){

	






$save=$save+ $cc+$row['value'];


 //next cust id number

}


	
































$insert = "UPDATE account SET value='$save'
WHERE acno ='$acno'";



$result=mysql_query($insert) or die(mysql_error());

	
	

?>

<script language="javascript" type="text/javascript">
   window.location.href="http://localhost/okoa/cashier.php"; 

</script>

<?



}
?>


		

				
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
		<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
