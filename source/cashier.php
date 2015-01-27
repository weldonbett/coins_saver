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
  
  <meta name="keywords" content="" />
  
  
  
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>OSS</title>

<link href="style.css" rel="stylesheet" type="text/css" media="screen" />


		 <link rel="stylesheet" href="que/jquery-ui.css">
		 
  <script src="que/jquery-1.9.1.js"></script>
  <script src="que/jquery-ui.js"></script>
  
  
  <script>
  
$(document).ready(function() {
		$('form').submit(function() {
			if($('input[name=adm]').val().length < 1) {
				$('.adm').html(' <b><font color="#FF0000"> fill in amount! </font></b>');
				return false;
			} else if($('input[name=adm]').val().match( /^[a-zA-Z]+$/)) {
				$('.adm').html('<b><font color="#FF0000">digits only!</font></b>');
				return false;
			} else {
				$('.adm').hide();
			}
			 if($('input[name=money]').val().length < 1) {
				$('.money').html('<b><font color="#FF0000">fill in cash! </font></b>');
				return false;
			} else if($('input[name=money]').val().match( /^[a-zA-Z]+$/)) {
				$('.money').html('<b><font color="#FF0000"> digits only! <b></font>');
				return false;
			} 
			else {
				$('.money').hide()
			}
		});
	});

</script>
  
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
		<ul >
		
			<li><a href="logout.php" ><font color="#000000"> &middot;Exit &middot;</a></li>
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
		

				<div class="post-bgbtm">

<table align="center" width="400" height="50" border="0" align="center" cellpadding="0" cellspacing="1" >

<tr colspan="2">
<td><form name="form1" method="post" action="cashier.php">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="3">

<tr>
<td width="71"><span>Total bill:  &nbsp;

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></td>
<td width="6">:</td>
<td width="201"><input name="adm"  type="text" id="adm"> <br /> <span class='error adm'></span></td>
</tr>
<!--
validation
pattern="K([A-Z]{2})_[0-9]{3}([A-Z]{1})" 
-->



<tr><td> <br /></td>
</tr>
<tr>
<td width="71"><span>Cash:&nbsp;

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;

    &nbsp;&nbsp;&nbsp;

    &nbsp;&nbsp;&nbsp;

    &nbsp;</span></td>
<td width="6">:</td>
<td width="201"><input name="money" type="text" id="money"> <br /><span class='error money'></span></td>
</tr>



<tr>
<td colspan="3" align="center"> &nbsp;

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;

    &nbsp;&nbsp;<input type="submit" name="pay" value="save coins" id="pay">
	</td>
</tr>
</table>
</form>
</td>
</tr>
</table>

		
	
		
		
		
		 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?
  ini_set( "display_errors", 0);
 
 
 
 ?>
 
 
 
 
 
		
 
<?php 
if(isset($_POST['pay']))
{

$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("okoa",$db);

$code=$_POST['adm']; //total bill
 
$money=$_POST['money']; //cash given by customer

$status=1;

$moneey=$money;
// create advanced variables


$dd=$moneey-$code;
if($dd<0)
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
        
		
			
			
			  <b>CASH NOT ENOUGH! </b>                                                            

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
        
</script>







<?

}

$query = "SELECT MAX(id) FROM gen "; 
	 
$resultw = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($resultw)){

	




$xx=$row['MAX(id)']+100;



 //next cust id number

}



	
	
	$insertt = "INSERT INTO gen VALUES('','$xx')";
	
$resultt=mysql_query($insertt) or die(mysql_error());

	









$bl=$money-$code;







$checkk=substr($bl,-1);


$check=$checkk-5; //remainder



    session_register();
	session_start();                      
	$cc=$check;
	
	$_SESSION['cc'] = $cc;
	
	$_SESSION['bl'] = $bl;
	$_SESSION['moneey'] = $moneey;
	
	$_SESSION['save'] = $checkk;
		
	$_SESSION['savee'] = $check;
	









/////////



if ($check >0 and $check<=4)
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
            <b>Swipe the card: </b>
		
			

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
        
</script>







<?
	$myFile = "J:/Test.txt";
$fh = fopen($myFile, 'r') or die( "failed plz insert okoa card");
$theData = fread($fh, 6);
fclose($fh);

$kil=123457;



$save=0;

$queryy = "SELECT value FROM account 	WHERE acno='$kil' "; 
	 
$resultww = mysql_query($queryy) or die(mysql_error());


// Print out result
while($row = mysql_fetch_array($resultww)){

	






$save=$save+ $check+$row['value'];




}











$insert = "UPDATE account SET value='$save'
WHERE acno ='$kil'";



$result=mysql_query($insert) or die(mysql_error());


///////

$date=date("y-m-d");
$cashin=$check;
$cashout=0;


$ml=0;


$resulty=mysql_query("SELECT*FROM yote WHERE dates ='$date' ");


while($row=mysql_fetch_array($resulty))

{


$ml=$row['cashin']+$cashin;


	

}
$sql="UPDATE yote SET cashin='$ml'
WHERE dates ='$date'";


$resulte=mysql_query($sql);


}
	
	
 
else if ($check==-5)
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
            <b>	There is no amount to save.Thank you!</b>
		
			

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
        
</script>







<?
}


else if ($check==0)
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
            <b>There is no amount to save.Thank you!</b>
		
			

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
        
</script>







<?












}







else if ($check<0 and $check>=-4)
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
            <b>Swipe the card: </b>
		
			

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
        
</script>







<?

	
	 $myFile = "J:/Test.txt";
$fh = fopen($myFile, 'r')or die( "failed plz insert okoa card");
$theData = fread($fh, 6);
fclose($fh);

$kil=123457;






$save=0;

$queryy = "SELECT value FROM account 	WHERE acno='$kil' "; 
	 
$resultww = mysql_query($queryy) or die(mysql_error());


// Print out result
while($row = mysql_fetch_array($resultww)){

	






$save=$save+ $checkk+$row['value'];


 //next cust id number

}

$insert = "UPDATE account SET value='$save'
WHERE acno ='$kil'";



$result=mysql_query($insert) or die(mysql_error());


///////



/////////////////////////////////////////////////////////////



///////

$date=date("y-m-d");
$cashin=$checkk;
$cashout=0;


$ml=0;


$resulty=mysql_query("SELECT*FROM yote WHERE dates ='$date' ");


while($row=mysql_fetch_array($resulty))

{


$ml=$row['cashin']+$cashin;


	

}
$sql="UPDATE yote SET cashin='$ml'
WHERE dates ='$date'";


$resulte=mysql_query($sql);


}

}
	
	else if(isset($_POST['submitt']))
{



$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("okoa",$db);

$code=$_POST['adm'];



$status=1;



// create advanced variables


$query = "SELECT MAX(id) FROM gen "; 
	 
$resultw = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($resultw)){

$xx=$row['MAX(id)']+100;



 //next cust id number

}



$insert = "UPDATE  items SET status='$status',cust= '$xx'
WHERE serial ='$code'";



$result=mysql_query($insert) or die(mysql_error());



//act as a link to next.php page

?>





<script language="javascript" type="text/javascript">
 
   window.location.href="http://localhost/okoa/cashier.php"; 
</script>




<?







}
////lipa na okoa.
	else if(isset($_POST['okoapay']))
{



$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("okoa",$db);




$code=$_POST['adm'];



$status=1;






// create advanced variables


$query = "SELECT MAX(id) FROM gen "; 
	 
$resultw = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($resultw)){

	




$xx=$row['MAX(id)']+100;



 //next cust id number

}



$insert = "UPDATE  items SET status='$status',cust= '$xx'
WHERE serial ='$code'";



$result=mysql_query($insert) or die(mysql_error());

	
	
	
	
	$insertt = "INSERT INTO gen VALUES('','$xx')";
	
$resultt=mysql_query($insertt) or die(mysql_error());




    
	session_start();
	                      

	
	$_SESSION['ser'] = $xx;

	


////////importing account number from card..






	
	$myFile = "J:/Test.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 6);
fclose($fh);

$kil=$theData;


if(!$fh)
{
?>
<script type="text/javascript">
<!--
alert('please insert okoa card')

window.location = "http://localhost/okoa/cashier.php";

//-->
</script>
<?
}
session_start();
	
	
		
		  
 $ser= $_SESSION['ser']; //customer id

	// $kill= $_SESSION['killl']; //acno..



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

$checkk=substr($bl,-1); //picking last value of digits 

$check=$checkk-5;




if ($check >0 and $check<=4)
{

////////// here....

?>
<script type="text/javascript">
<!--

    	window.location = "http://localhost/okoa/reports/okoareport.php";

//-->
</script>
<?
$insertt = "UPDATE  account SET value='$bl'
WHERE acno ='$kil'";



$resultt=mysql_query($insertt) or die(mysql_error());



///////

$date=date("y-m-d");


$queryyi = "SELECT cashin FROM yote 	WHERE dates='$date' "; 
	 
$resultwwi = mysql_query($queryyi) or die(mysql_error());


// Print out result
while($row = mysql_fetch_array($resultwwi)){

	
$b=$row['cashin'];


 //next cust id number

}

$sum=$b+$checkk;


$reinsert = "UPDATE yote SET cashin='$sums' WHERE dates ='$date'";



$resulte=mysql_query($reinsert) or die(mysql_error());


$balance=$bl-$check;



    session_register();
	session_start();                      
	
	
	$_SESSION['balance'] = $balance;

}
else if ($check<0 and $check>=-4)
{

$insertt = "UPDATE  account SET value='$bl'
WHERE acno ='$kil'";



$resultt=mysql_query($insertt) or die(mysql_error());





$date=date("y-m-d");


$queryyi = "SELECT cashin FROM yote 	WHERE dates='$date' "; 
	 
$resultwwi = mysql_query($queryyi) or die(mysql_error());


// Print out result
while($row = mysql_fetch_array($resultwwi)){

	
$b=$row['cashin'];


 //next cust id number

}

$sum=$b+$checkk;


$reinsert = "UPDATE yote SET cashin='$sum'
WHERE dates ='$date'";



$resulte=mysql_query($reinsert) or die(mysql_error());

?>

<script language="javascript" type="text/javascript">
<!--
window.location.href="http://localhost/okoa/reports/okoareport.php";
//--> 
</script>


<?

}

else if ($check==-5)
{

$insertt = "UPDATE  account SET value='$bl'
WHERE acno ='$kil'";



$resultt=mysql_query($insertt) or die(mysql_error());


?>

<script language="javascript" type="text/javascript">
<!--
window.location.href="http://localhost/okoa/reports/okoareport.php";
//--> 
</script>


<?

}


else if ($check==0)
{



$insertt = "UPDATE  account SET value='$bl'
WHERE acno ='$kil'";



$resultt=mysql_query($insertt) or die(mysql_error());

?>

<script language="javascript" type="text/javascript">
<!--
  window.location.href="http://localhost/okoa/reports/okoareport.php";
//-->
</script>

<?
}

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
	<br /><br /><br />
	<br /><br /><br />
	<br /><br /><br />
	<br /><br /><br />
	<br /><br /><br />
	<br />


	<p>Developed by kip.</p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
