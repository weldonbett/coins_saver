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



<script src="scripts/jquery-1.4.3.min.js" type="text/javascript"></script>

<style type="text/css">

.web_dialog_overlay
{
   position: fixed;
   top: 0;
   right: 0;
   bottom: 0;
   left: 0;
   height: 100%;
   width: 100%;
   margin: 0;
   padding: 0;
   background: #000000;
   opacity: .15;
   filter: alpha(opacity=15);
   -moz-opacity: .15;
   z-index: 101;
   display: none;
}
.web_dialog
{
   display: none;
   position: fixed;
   width: 380px;
   height: 200px;
   top: 50%;
   left: 50%;
   margin-left: -190px;
   margin-top: -100px;
   background-color: #ffffff;
   border: 2px solid #336699;
   padding: 0px;
   z-index: 102;
   font-family: Verdana;
   font-size: 10pt;
}
.web_dialog_title
{
   border-bottom: solid 2px #336699;
   background-color: #336699;
   padding: 4px;
   color: White;
   font-weight:bold;
}
.web_dialog_title a
{
   color: White;
   text-decoration: none;
}
.align_right
{
   text-align: right;
}

</style>

<script type="text/javascript" src="JQuery/jquery.js"></script>
<script type="text/javascript" src="JQuery/jquery.validate.js"></script>

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
	<div id="menu"> <font color="#000000">
		<ul>
			
		
				<li><a href="logout.php" > <font color="#000000">&middot;Exit &middot; </font></a></li>
			
		</ul>
		</font>
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


if(isset($_POST['submit']))
{

	
				
                $db = mysql_connect("localhost", "root", "");
                $sl = mysql_select_db("okoa", $db);
               
         $date=$_POST['date'];  




session_register();
	session_start();                      
	$datee=$date;
	
	$_SESSION['datee'] = $datee;

	
$exp_date=date("y-m-d");
$today=strtotime($exp_date);
$indate=strtotime($date);




if($indate<=$today)
{


$result=mysql_query("SELECT*FROM yote WHERE dates='$date'");





                echo "<table border='0' align='center' cellspacing='1' cellpadding='1'><tr><th  bgcolor='#FFFFFF' align='left' >#</th><th bgcolor='#FFFFFF' align='left'>DATES</th><th bgcolor='#FFFFFF' align='left'>CASHIN</th><th bgcolor='#FFFFFF'  align='left'>CASHOUT</th> <th bgcolor='#FFFFFF'>BALANCE</th>  <th  bgcolor='#FFFFFF'> </th></tr> ";
				
	echo "</tr><tr><td>....................................................</td><td>..........................................</td><td>...............................</td><td>...................................</td>
	<td>.................</td><td>.............</td></tr>";
	
 
while($row=mysql_fetch_array($result))

{


$bal=$row['cashin']-$row['cashout'];


	echo "<tr><td> </td><td>".$row['dates']."</td><td>".$row['cashin'].".00</td><td>".$row['cashout'].".00</td><td>".$bal.".00</td><td>";
		
	

	
	echo "</tr><tr><td>....................................................</td><td>..........................................</td><td>...............................</td><td>...................................</td>
	<td>.................</td><td>.............</td></tr></form>";
	
	
}
echo "</table>";


 
mysql_close();


}
else




{
?>

<div id="output"></div>
    
<div id="overlay" class="web_dialog_overlay"></div>
    
<div id="dialog" class="web_dialog">
   <table style="width: 100%; border: 0px;" cellpadding="3" cellspacing="0">
      <tr>
         <td class="web_dialog_title">OSS</td>
         <td class="web_dialog_title align_right">
            <a href="#" id="btnClose">close</a>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <b>NO FUTURE DATES! </b>
		
			

         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="padding-left: 15px;">
            <div id="brands">
			
			
			



              
			  
            </div>
         </td>
      </tr>
      <tr>
         <td>&nbsp;</td>
         <td>&nbsp;</td>
      </tr>
      <tr>
         <td colspan="2" style="text-align: center;">
            <form> <input id="btnSubmit" type="button" value="&nbsp; ok &nbsp;" /></form>
         </td>
      </tr>
   </table>
</div>


<script type="text/javascript">

   $(document).ready(function ()
   {
      
         ShowDialog(false);
        
     

      $("#btnShowModal").click(function (e)
      {
         ShowDialog(true);
         e.preventDefault();
      });

      $("#btnClose").click(function (e)
      {
         HideDialog();
         e.preventDefault();
      });

      $("#btnSubmit").click(function (e)
      {
         var brand = $("#brands input:radio:checked").val();
         $("#output").html();
         HideDialog();
         e.preventDefault();
      });

   });

   function ShowDialog(modal)
   {
      $("#overlay").show();
      $("#dialog").fadeIn(300);

      if (modal)
      {
         $("#overlay").unbind("click");
      }
      else
      {
         $("#overlay").click(function (e)
         {
            HideDialog();
         });
      }
   }

   function HideDialog()
   {
      $("#overlay").hide();
      $("#dialog").fadeOut(300);
   } 
        
</script><?








}




















}



?> 
  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;
  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;
  &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp;  &nbsp; &nbsp;  &nbsp; &nbsp; <a href="reports/re.php" target="_blank" style="text-decoration:none"> <font size="+1" color="#000000" > Report</a>
                                                                                  
                                </a></li></ul>
</nav>
           
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
