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
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="okoa"; // Database name
$tbl_name="account"; // Table name

// Connect to server and select databse.

mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

?>
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
<title>withdraw</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />


<script type="text/javascript" src="JQuery/jquery.js"></script>
<script type="text/javascript" src="JQuery/jquery.validate.js"></script>
<script type="text/javascript">

$(document).ready(function() {
		$('form').submit(function() {
		if($('input[name=pin]').val().length < 1) {
				$('.pin').html('<b><font color="#FF0000"> please enter pin! </font></b>');
				return false;
			} 
			else {
				$('.pin').hide();
			}
			if($('input[name=amount]').val().length < 1) {
				$('.amount').html('<b> <font color="#FF0000">amount length is too short!</font></b>');
				return false;
			} 
			else if($('input[name=amount]').val().match(/^[a-zA-Z]+$/))
			 {
			
				$('.amount').html('<b> <font color="#FF0000">should be in numeric!</font></b>');
				return false;
			}else {
				$('.amount').hide();
			}
	
			
		});
	});

</script>



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
</head>
<body>


<div id="wrapper">
	<div id="header">
		<div id="logo">
		<h1><img src="image/kk.png" /></h1>
				
		
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>

		
			<li><a href="checkbl.php"><font color="#000000" >Check b/l</a></li>
			
			
				
			
					<li><a href="checkbl.php">  <font color="#000000" >      &middot;Exit &middot;</a></li>
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


<font color="#000000" >
<table align="center" width="400" height="50" border="0" align="center" cellpadding="0" cellspacing="1" >
<tr colspan="2" >
<td><form name="form1" method="post" action="withdraw.php">
<table align="center" width="100%" border="0" cellspacing="0" cellpadding="3">


<tr>
<td width="90"><span>PIN NO. : </span></td>
<td width="6"></td>
<td width="201"><input type="password"  name="pin"  id="pin"> <br /> <span class='error pin'></span></td>
</tr>
<tr><td> <br /></td>
</tr>
<tr>
<td width="90"><span>AMOUNT (Ksh): </span></td>
<td width="6"></td>
<td width="201"><input type="text"  name="amount"  id="amount"> <br /> <span class='error amount'></span></td>
</tr>
<!--
validation
pattern="K([A-Z]{2})_[0-9]{3}([A-Z]{1})" 
-->



<tr><td> <br /></td>
</tr>



<tr>
<td colspan="3" align="center"> &nbsp;

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;

     &nbsp;&nbsp;&nbsp;
	 &nbsp; &nbsp;&nbsp; &nbsp;

     &nbsp;
	 &nbsp; &nbsp;&nbsp; &nbsp;

     &nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="swipe card"></td>
</tr>
</table>
</form>
</td>
</tr></table>






			<?php
if(isset($_POST['submit']))
{







////////importing account number from card..






	
	$myFile = "J:/Test.txt";
$fh = fopen($myFile, 'r');
$theData = fread($fh, 6);
fclose($fh);

$kil=$theData;



// Get values from form

$amount=$_POST['amount'];



$pin=$_POST['pin'];



$query = "SELECT value FROM account WHERE acno='$kil' AND pin='$pin'"; 
	 
$resultw = mysql_query($query) or die(mysql_error());




while($rows=mysql_fetch_array($resultw))
		  {
		  
		  $xx=$rows['value']; 
		  }
		  
		  $balance=$xx-$amount;
		  
		  if($balance>=0 && $balance <  $xx)
		  
		 { 
		  
		  
		  
		  $insertt = "UPDATE  account SET value='$balance'
WHERE acno ='$kil' AND pin='$pin'";
$resultt=mysql_query($insertt) or die(mysql_error());



$date=date("y-m-d");
$cashout=$amount;
$cashIN=0;

$sql="INSERT INTO yote(dates,cashin,cashout)VALUES('$date','$cashin','$cashout')";
$resulte=mysql_query($sql);


  
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
       


			  WITHDRAWN =  <b> <? echo $amount.".00"; ?> sh.   </b

         ></td>
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
        
		
			
			
			  <b>INSUFFICIENT AMOUNT TO WITHDRAW!</b>                                                            

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












								







}
?>




				<!--<h1 class="title"><a href="#">Welcome to Exploitable  </a></h1>
				<p class="meta">Posted by <a href="#">Someone</a> on March 10, 2008
					&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
				<div class="entry">
					<p>This is <strong>Exploitable </strong>, a free, fully standards-compliant CSS template designed by FreeCssTemplates<a href="http://www.nodethirtythree.com/"></a> for <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.  This free template is released under a <a href="http://creativecommons.org/licenses/by/2.5/">Creative Commons Attributions 2.5</a> license, so you�re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>
				</div> -->
			</div>
			</div>
			</div>
			<!--<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">
				<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
				<p class="meta">Posted by <a href="#">Someone</a> on March 8, 2008
					&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim, molestie in, rhoncus ut, lobortis a, est.</p>
					<p>Praesent ac lectus. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Vivamus augue. Fusce eget tellus ultrices ligula volutpat adipiscing. Aenean ligula lectus, vehicula in, dictum a, fermentum nec, felis. Nunc ac turpis in leo posuere imperdiet.</p>
				</div>
			</div>
			</div>
			</div>
			<div class="post">
			<div class="post-bgtop">
			<div class="post-bgbtm">
				<h2 class="title"><a href="#">Phasellus pellentesque turpis </a></h2>
				<p class="meta">Posted by <a href="#">Someone</a> on March 8, 2008
					&nbsp;&bull;&nbsp; <a href="#" class="comments">Comments (64)</a> &nbsp;&bull;&nbsp; <a href="#" class="permalink">Full article</a></p>
				<div class="entry">
					<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum vel, tempor at, varius non, purus. Mauris vitae nisl nec metus placerat consectetuer. Donec ipsum. Proin imperdiet est. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem. Phasellus pellentesque. Mauris quam enim molestie  rhoncus lobortis a, est.</p>
				</div>
			</div>
			</div>
			</div> -->
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<!-- <div id="sidebar">
			<ul>
				<li>

					<h2>Aliquam tempus</h2>
					<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna ornare consectetuer hendrerit.</p>
				</li>
				<li>
					<h2>Categories</h2>
					<ul>
						<li><a href="#">Uncategorized</a> (3)<span>Lorem Ipsum Dolor Sit Amit</span></li>
						<li><a href="#">Lorem Ipsum</a> (42)<span>Lorem Ipsum Dolor Sit Amit</span></li>
						<li><a href="#">Urna Congue Rutrum</a> (28)<span>Lorem Ipsum Dolor Sit Amit</span> </li>
						<li><a href="#">Vivamus Fermentum</a> (13)<span>Lorem Ipsum Dolor Sit Amit</span> </li>
					</ul>
				</li>
				<li>
					<h2>Blogroll</h2>
					<ul>
						<li><a href="#">Phasellus Pellentesque</a><span>Lorem Ipsum Dolor Sit Amit</span> </li>
						<li><a href="#">Consectetuer Adipiscing</a><span>Lorem Ipsum Dolor Sit Amit</span> </li>
						<li><a href="#">Urna Congue Rutrum</a><span>Lorem Ipsum Dolor Sit Amit</span> </li>
					</ul>
				</li>
				<li>
					<h2>Archives</h2>
					<ul>
						<li><a href="#">December 2009</a>&nbsp;(29)<span>Lorem Ipsum Dolor Sit Amit</span></li>
						<li><a href="#">November 2009</a>&nbsp;(30)<span>Lorem Ipsum Dolor Sit Amit</span></li>
						<li><a href="#">October 2009</a>&nbsp;(31)<span>Lorem Ipsum Dolor Sit Amit</span></li>
					</ul>
				</li>
			</ul>
		</div> -->
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
	<div id="footer">
	
	
		<br />
			<br />	<br />
			<br />	<br />	<br />
			<br />	<br />
			<br />	<br />	<br />
			<br />	<br />
			<br />	<br />	<br />
			<br />	<br />
		<p>Developed by kip.</p>
	</div>
	<!-- end #footer -->
</div>
</body>
</html>
s