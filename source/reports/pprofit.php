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
    $this->Cell(0,10,'eZee ltd',0,0,'C');
}











        function BuildTable($head,$data,$tail) {

        //Colors, line width and bold font

        $this->SetFillColor(0,0,0);

        $this->SetTextColor(255);

        $this->SetDrawColor(128,0,0);

        $this->SetLineWidth(.0);

        $this->SetFont('','');

        //Header

        // make an array for the column widths

        $w=array(30,30,30,30,30,30);

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


 $this->Cell($w[3],6,$row[3],'LR',0,'L',$fill);
 
 
  $this->Cell($w[4],6,$row[4],'LR',0,'L',$fill);
    $this->Cell($w[5],6,$row[5],'LR',0,'L',$fill);


 
 
 

 
 
	    $this->Ln();

        // flips from true to false and vise versa

        $fill =! $fill;

        }

        $this->Cell(array_sum($w),0,'','T');

        }

}




//connect to database

if(isset($_POST['submit']))
 {
 $xx=$_POST['name'];
 
 
$db=mysql_connect("localhost","root","");
$sl=mysql_select_db("ebtech",$db);





$result=mysql_query("SELECT * FROM stock WHERE status='1' AND cat='$xx' OR name='$xx' OR serial='$xx' OR date= '$xx'  ");




$count=mysql_num_rows($result);

if (!$count==true)
{

?>





<script language="javascript" type="text/javascript">
   alert ('SORRY SEARCH NOT FOUND TRY AGAIN .GO BACK')
   window.location.href="http://localhost/stock/profit.php"; 
</script>




<?

exit();

}
else {


// build the data array from the database records.

while($row = mysql_fetch_array($result)) {

		
		
		$profit=$row['price2']-$row['price'];
			
$net+=$profit;

        $data[] = array($row['cat'], $row['name'], $row['serial'],$row['price'],$row['price2'],$profit);




}
}

}

// start and build the PDF document

$pdf = new PDF();



//Column titles

$header=array('CATEGORY','STOCK BRAND','SERIAL','BUY PRICE','SELL PRICE','PROFIT/LOSS');

$pdf->SetFont('Arial','',10);

$pdf->AddPage();

// call the table creation method

$pdf->BuildTable($header,$data,$tail);

$pdf->Output();






?>