<?php
session_start();
if(!isset($_SESSION['username'])){
	header("Location:index.php");
	
	
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
		<ul>
			
		
				<li><a href="logout.php" > <font color="#000000">&middot;Exit &middot; </font></a></li>
			
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

<table width="300" border="0" align="left" cellpadding="0" cellspacing="0">
<tr>
<form name="loginFrm" method="post" action="admin2.php" id="form1">
<td>
<table width="100%" border="0" cellpadding="0" cellspacing="1">
<tr>
<p colspan="3"><strong><h4 >
 &nbsp;&nbsp; &nbsp;&nbsp;TRANSACTIONS </h4> </strong></td>
</tr>

<tr>
</tr>
<tr>
<tr>
<br />
</tr>
<p><label>&nbsp;&nbsp; &nbsp;&nbsp;Date:&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label><input value="yyyy-mm-dd" type="date" name="date">

</p>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td> <td>&nbsp;</td><td>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
<p align="center"><input type="submit" name="submit" value="Search"></p>
</tr>
</table>
</form>




</td></tr>
</table>








	
	
	
	
	
	

		


                <?php



				
                $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("okoa", $db);
               
           


$result=mysql_query("SELECT*FROM yote");




                echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th  bgcolor='#FFFFFF' align='left' >#</th><th bgcolor='#FFFFFF' align='left'>DATES</th><th bgcolor='#FFFFFF' align='left'>CASHIN</th><th bgcolor='#FFFFFF'  align='left'>CASHOUT</th> <th bgcolor='#FFFFFF'>BALANCE</th>  <th  bgcolor='#FFFFFF'> </th></tr> ";
				
	echo "</tr><tr><td>....................................................</td><td>..........................................</td><td>...............................</td><td>...................................</td>
	<td>.................</td><td>.............</td></tr>";
 
while($row=mysql_fetch_array($result))

{


$bal=$row['cashin']-$row['cashout'];


	echo "<tr><td></td><td>".$row['dates']."</td><td>".$row['cashin'].".00</td><td>".$row['cashout'].".00</td><td>".$bal.".00</td><td>";
		
	

	
	echo "</tr><tr><td>....................................................</td><td>..........................................</td><td>...............................</td><td>...................................</td>
	<td>.................</td><td>.............</td></tr></form>";
}
echo "</table>";


 
mysql_close();









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
	<br /><br /><br />
	<br /><br /><br />
	<br /><br /><br />
		<br />
	<br /><br />		<br />
	<br />

	</div>
	<!-- end #footer -->
</div>
</body>
</html>
