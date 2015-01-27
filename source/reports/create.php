<?php
# Catch the posted data, validate by getting rid of > and <

$header =$_POST['header'];
# Replace > and < with a blank space
$header = str_replace('<','',$header);
$header = str_replace('>','',$header);
$body =$_POST['body'];
# Replace > and < with a blank space
$body = str_replace('<','',$body);
$body = str_replace('>','',$body);

# Include the file that does all of the work
include ('class.ezpdf.php');

# Start a new PDF file
$pdf =& new Cezpdf();

# Add the Contest's JPG to the PDF and place it in a specific position
# This particular command requires you to have the PHP GD Library.
$pdf->addJpegFromFile('jawbone.jpg',199,$pdf->y-200,200,0);

# Select the font we'll be using. There are more fonts in the zip file.
$pdf->selectFont('./fonts/Helvetica.afm');

# include the header, then move down a couple of lines, font size 25
# justification centered (centred if you're from the UK)
$pdf->ezText($header . "\n\n",25,array('justification'=>'centre'));

# include the body after moving down 7 lines to get under the pic.
# Font size 16, justification centered.
$pdf->ezText("\n\n\n\n\n\n\n" . $body,16,array('justification'=>'centre'));

#create the pdf and stream it to the page
$pdf->output();
$pdf->ezStream();
?>