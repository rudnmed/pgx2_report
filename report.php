<?php 
 //include library
  include('library/tcpdf.php'); 

 //make tcpdf object 
  $pdf = new TCPDF('p', 'mm', 'A4');
 
 //header and footer
  $pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);

 //add page 
  $pdf->AddPage();
  
  
 // set font
$pdf->SetFont('Helvetica', '', 19);

// create left column
$left_column = '';

/*
//create right block
$right_column = "<div><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PharmacoGenomex<sub>2</sub></h1></div>
<style>
h1 {
color: #FFFFFF;
background-color: #4B7872;
}	
</style>
";
*/

//writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// get current vertical position
//$y = $pdf->getY();

//left column
// set color for background
$pdf->SetFillColor(75, 120, 114);

// set color for text - none
$pdf->SetTextColor();

// write the left column
$pdf->writeHTMLCell(40, '274', '1', '1', $left_column, 1, 0, 1, true, 'J', true);

//add 
$title = '
<div><h1>&nbsp;&nbsp;&nbsp;&nbsp;PharmacoGenomex<sub>2</sub></h1></div>
<style>
h1 {
	color: #FFFFFF;
}
</style>
';


//right block
$pdf->WriteHTMLCell(180, 50, '90', '0', "", 1,0);
$pdf->WriteHTMLCell(120, 32, '100', '1', "$title", 1,0, 'J', true);


//text content
$text_intro = '<h4>Genotyping results and recommendations for personalized therapy</h4>
<style>
h4 {
	color: #4B7872;
	text-align: right;
	font-size: 16px;
}
</style>
';

// output the content
//$pdf->writeHTML($text_intro, true, false, true, false, '45');
$pdf->WriteHTMLCell(120, 30, '80', '60', "$text_intro", 0,0);

// Image
$pdf->Image('web_medium.png', 45, 75, 180, 120, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);

//table of patient
$table1 = '
<table>
<tr>
<td>Patient</td>
<td>Ivanov</td>
<td>ID</td>
<td>0039394</td>
</tr>
<tr>
<td>Birth</td>
<td>01/01/1980</td>
<td>Height</td>
<td>83</td>
</tr>
<tr>
<td>Weight</td>
<td>80</td>
<td>Sex</td>
<td>Male</td>
</tr>
<tr>
<td>Race</td>
<td>Euro</td>
<td>Date</td>
<td>02/02/20</td>
</tr>
</table>

<style>
table {
	font-size: 13px;
}
</style>
';

//table of patient
$pdf->WriteHTMLCell(120, 30, '41', '200', "$table1", 1,0);

//sign of doctor
$sign = '<p><strong>Electronic signature</strong></p>
<p>Michael Zastrozhin, MD, PhD, CMedSci
Chief, Laboratory of Genetics and Basic Research, Moscow...</p>
<style>
h6, p {
	color: #000000;
	text-align: right;
	font-size: 13px;
}
</style>
';

// output the sign
$pdf->WriteHTMLCell(90, 20, '80', '242', "$sign", 0,0);


//right block
// set color for background
//$pdf->SetFillColor(255, 255, 255);

// set color for text
//$pdf->SetTextColor(0, 0, 0);

// write the right block
//$pdf->writeHTMLCell(160, '50', '90', '0', $right_column, 1, 1, 1, true, 'J', true);



// reset pointer to the last page
//$pdf->lastPage(); 
  
 
  
  //add Cell  
//$pdf->WriteHTMLCell(160, 50, '90', '1', "", 1,2);
    
 
  //var
  /*
$main_title = "
<div><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PharmacoGenomex<sub>2</sub></h1></div>
<style>
h1 {
color: #000000;
}	
</style>
";
*/

  //add Title   
//$pdf->SetFont('Helvetica', '', '18');  
//$pdf->WriteHTMLCell(120, 25, '100', '2', "$main_title", 1,2);
 


  //add Left Column
//$pdf->WriteHTMLCell(40, 274, '0', '0', "", 1,0);
 
 
 
 //outptut 
 $pdf->Output();
 
 


  