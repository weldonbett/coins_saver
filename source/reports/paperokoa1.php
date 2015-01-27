<?php 


require("fpdf/fpdf.php");



class PDF extends FPDF {




	
 function Footer()
{
    //Position at 1.5 cm from bottom
    $this->SetY(-15);
    //Arial italic 8
    $this->SetFont('Arial','I',10);
    //Page number
    $this->Cell(0,10,'Tuskys supermarket.Thank you.',0,0,'C');
}










        function BuildTable($head,$data) {

        //Colors, line width and bold font

        $this->SetFillColor(0,0,0);

        $this->SetTextColor(255);

        $this->SetDrawColor(128,0,0);

        $this->SetLineWidth(.0);

        $this->SetFont('','');

        //Header

        // make an array for the column widths

        $w=array(30,30,30);

        // send the headers to the PDF document

        for($i=0;$i<count($head);$i++)

        $this->Cell($w[$i],7,$head[$i],1,0,'C',1);

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


        $this->Ln();

        // flips from true to false and vise versa

        $fill =! $fill;

        }

        $this->Cell(array_sum($w),0,'','T');

        }

}



 

//connect to database



 
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("okoa",$db);




$query = "SELECT MAX(cust) FROM items "; 
	 
$resultw = mysql_query($query) or die(mysql_error());

// Print out result
while($row = mysql_fetch_array($resultw)){

	




$xx=$row['MAX(cust)'];



 //next cust id number

}

























$total=0;

$result=mysql_query("SELECT * FROM items WHERE cust='$xx'");






// build the data array from the database records.

while($row = mysql_fetch_array($result)) {

        $data[] = array($row['name'], '1', $row['price']);


$total=$total+$row['price'];
}



// start and build the PDF document

$pdf = new PDF();





//Column titles

$header=array('ITEM NAME','QUANTITY','PRICE(ksh)');



$pdf->SetFont('Arial','',10);

$pdf->AddPage();
$pdf->SetDisplayMode(70);

// call the table creation method

$pdf->Image('kk.gif',5,3,15);
$pdf->Ln(10);
$pdf->BuildTable($header,$data);
$pdf->Ln(10);
session_start();                      
	
	
	
	 $bl=$_SESSION['bl'];
	 
	 $moneey=$_SESSION['moneey'];
	
	 $savee=$_SESSION['savee'];
	 
	 $act=$bl-$savee;
	
$pdf->Cell(0, 10,'The total bill:  '. $total.'.00 /=',0,1,'L');

$pdf->Ln(1);
$pdf->Cell(0, 10,'Cash:            '. $moneey.'.00/=',0,1,'L');

$pdf->Ln(1);
$pdf->Cell(0, 10,'Balance:           '. $bl.'.00 /=',0,1,'L');

$pdf->Ln(1);

$pdf->Cell(0, 10,'Okoa save:        '. $savee.'.00 /=',0,1,'L');

$pdf->Ln(1);

$pdf->Cell(0, 10,'Actual Balance:  '. $act.'.00 /=',0,1,'L');

$pdf->Ln(1);

$pdf->Output();


?>













