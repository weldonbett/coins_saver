
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
		<form action="okoapay.php" method="post">
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
</tr>
<tr></tr><tr></tr><tr></tr>
<tr></tr>
<tr></tr><tr>
			
			</tr><tr><td>
			
			
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
  
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
	    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
		  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	  &nbsp;&nbsp;&nbsp;&nbsp;
		  	  
	<input name ="submit" type="submit"  value="receipt"/>

	   </form>

</td></tr></table>
		
	
		
		<br><br><br><br><br><br><br>
		
		<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
		
		
		
		
		
		
		
		
		
		
		
		
		 
 
 
 
 
<?php 
//if(isset($_POST['submit']))
//{





session_start();
	
	
		
		  
 $ser= $_SESSION['ser']; //customer id

	$kil= $_SESSION['killl']; //acno..




$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("okoa",$db);



 $acno=$_POST['acno'];


	  

	




$queryy = "SELECT value FROM account 	WHERE acno='$kil' "; 
	 
$resultww = mysql_query($queryy) or die(mysql_error());


// Print out result
while($row = mysql_fetch_array($resultww)){

	






$ball=$row['value'];


 //next cust id number

}


	$bal=$ball;




$queryy = "SELECT price FROM items 	WHERE cust='$ser' "; 
	 
$resultww = mysql_query($queryy) or die(mysql_error());


// Print out result
while($row = mysql_fetch_array($resultww)){

	




$bal=$bal-$row['price'];



 //next cust id number

}


$bl=$bal; // balance one

$checkk=substr($bl,-1);

$check=$checkk-5;




if ($check >=0 and $check<=4)
{







$insertt = "UPDATE  account SET value='$check'
WHERE acno ='$kil'";



$resultt=mysql_query($insertt) or die(mysql_error());

$balance=$bl-$check;



    session_register();
	session_start();                      
	
	
	$_SESSION['balance'] = $balance;

	

		  


	



?>

<script language="javascript" type="text/javascript">

   window.location.href="http://localhost/okoa/reports/okoapayre.php"; 

</script>

<?

}
else if ($check<0 and $check>=-4)
{

$insertt = "UPDATE  account SET value='$checkk'
WHERE acno ='$kil'";



$resultt=mysql_query($insertt) or die(mysql_error());


?>

<script language="javascript" type="text/javascript">

   window.location.href="http://localhost/okoa/reports/paper.php"; 

</script>

<?


}


else if ($check==0)
{



$insertt = "UPDATE  account SET value='0'
WHERE acno ='$kil'";



$resultt=mysql_query($insertt) or die(mysql_error());

?>

<script language="javascript" type="text/javascript">
   window.location.href="http://localhost/okoa/reports/paper.php"; 

</script>

<?

}






	
	
	



 
// }
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
