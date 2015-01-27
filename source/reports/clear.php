<?php
session_start();
if(isset($_SESSION['serial']))
{
	


 


require("fpdf/fpdf.php");



class PDF extends FPDF {



	
	
	
	
	
	
	
	
	
 function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',10);
    //Page number
    $this->Cell(0,10,'eZee ltd ',0,0,'C');
}












        function BuildTable($header,$data) {

        //Colors, line width and bold font

        $this->SetFillColor(0,0,0);

        $this->SetTextColor(255);

        $this->SetDrawColor(128,0,0);

        $this->SetLineWidth(.0);

        $this->SetFont('','');

        //Header

        // make an array for the column widths

        $w=array(30,30,30,30);

        // send the headers to the PDF document

        for($i=0;$i<count($header);$i++)

        $this->Cell($w[$i],7,$header[$i],1,0,'C',1);

        $this->Ln();

        //Color and font restoration

        $this->SetFillColor(175);

        $this->SetTextColor(0);

        $this->SetFont('');



        //now spool out the data from the $data array

        $fill=true; // used to alternate row color backgrounds

        foreach($data as $row)

        {

        $this->Cell($w[0],6,$row[0],'LR',0,'L',$fill);

        // set colors to show a URL style link
        $this->SetTextColor(0);


        $this->SetFont('', '');

        $this->Cell($w[1],6,$row[1],'LR',0,'L',$fill);

        // restore normal color settings

        $this->SetTextColor(0);

        $this->SetFont('');

        $this->Cell($w[2],6,$row[2],'LR',0,'C',$fill);


 $this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);

 
  
        $this->Ln();

        // flips from true to false and vise versa

        $fill =! $fill;

        }

        $this->Cell(array_sum($w),0,'','T');

        }

}





//connect to database


 
 
 

  
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("ebtech",$db);




session_start();
	
	
	 $serial=$_SESSION['serial'];

$datee=$_SESSION['date'];


$receipt=mysql_query("SELECT * FROM repair WHERE serial ='$serial'");


while($row=mysql_fetch_array($receipt))
{

if($row)
{
$id=$row['identity'];
}

}






$result=mysql_query("SELECT * FROM repair WHERE identity='$id'");


// build the data array from the database records.

while($row = mysql_fetch_array($result)) {

if($row['status']==1 && $row['date']==$datee)
{


        $data[] = array($row['cat'], $row['name'], $row['serial'],$row['price']);







$name=$row['owner'];
$id=$row['identity'];


}
else
{

?>

<script language="javascript" type="text/javascript">
   alert ('PLEASE FILL IN DETAILS,CORRECTLY.')
   window.location.href="http://localhost/stock/done.php"; 
</script>
<?

//header("Location: http://localhost/stock/done.php");
}
}



// start and build the PDF document

$pdf = new PDF();






$header=array('CATEGORY','DEVICE NAME','SERIAL','COST (kshs)');



$pdf->SetFont('Arial','',10);

$pdf->AddPage();


$pdf->SetY(10);



	 


$pdf->Cell(0,10,'CUSTOMER NAME :         '.$name.'             ',0,1);


$pdf->Ln(1);

$pdf->Cell(0,10,'IDENTITY CARD :            '.$id.'           ',0,1);


$pdf->Ln(1);

$pdf->Cell(0,10,'DATE:                               '.date("d-m-y").' ',0,1);


$pdf->Ln(1);


// call the table creation method

$pdf->BuildTable($header,$data);

$pdf->SetY(178);


$pdf->Cell(0,10,'COMPANY SIGN               ..............................                     ',0,1);


$pdf->Ln(1);
$pdf->Cell(0,10,'CUSTOMER SIGN             ..............................                      ',0,1);


$pdf->Ln(1);


$pdf->Output();


?>
<?
}
else 
{

?>

<script language="javascript" type="text/javascript">
   alert ('PLEASE FILL IN DETAILS,TO GET RECEIPT.')
   window.location.href="http://localhost/stock/done.php"; 
</script>
<?



}
?>











