<?php 
 //include library
  include('library/tcpdf.php'); 

 //make tcpdf object 
  //$pdf = new TCPDF('P', 'mm', 'A4', 'UTF-8');
  $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8');
  
   // set font
//$pdf->SetFont('Helvetica', '', 19);
$pdf->SetFont('dejavusans', '', 14, '', true);
  
 
 //header and footer
  $pdf->setPrintHeader(false);
  $pdf->setPrintFooter(false);

 //add first page 
  $pdf->AddPage();
  

// create left column
$left_column = '';


//left column
// set color for background
$pdf->SetFillColor(75, 120, 114);

// set color for text - none
$pdf->SetTextColor();

// write the left column
$pdf->writeHTMLCell(40, '274', '1', '1', $left_column, 1, 0, 1, true, 'J', true);

//add 
$title = '
<div><h1>&nbsp;&nbsp;PharmacoGenomeX<sub>2</sub></h1></div>
<style>
h1 {
	color: #FFFFFF;
	font-size: 24px;
}
</style>
';


//right block
$pdf->WriteHTMLCell(170, 48, '90', '0', "", 1,0);
$pdf->WriteHTMLCell(120, 32, '100', '1', "$title", 1,0, 'J', true);


//text content
$text_intro = '<h4>Результаты генотипирования<br> и рекомендации<br> по персонализированной терапии</h4>
<style>
h4 {
	color: #4B7872;
	text-align: right;
	font-size: 14px;
}
</style>
';

// output the content
//$pdf->writeHTML($text_intro, true, false, true, false, '45');
$pdf->WriteHTMLCell(120, 30, '80', '55', "$text_intro", 0,0);

// Image
$pdf->Image('web_medium.png', 45, 75, 180, 120, 'PNG', '', '', true, 150, '', false, false, 1, false, false, false);

//table of patient
$table1 = '
<table>
<tr>
<td>Пациент</td>
<td>Иванов</td>
<td>ID</td>
<td>0039394</td>
</tr>
<tr>
<td>Дата рождения</td>
<td>01/01/1980</td>
<td>Рост</td>
<td>83</td>
</tr>
<tr>
<td>Вес</td>
<td>80</td>
<td>Пол</td>
<td>Муж</td>
</tr>
<tr>
<td>Раса</td>
<td>Евро</td>
<td>Дата</td>
<td>02/02/20</td>
</tr>
</table>

<style>
table {
	font-size: 11px;
}
</style>
';

//table of patient
$pdf->WriteHTMLCell(120, 30, '41', '200', "$table1", 1,0);

//sign of doctor
$sign = '<p><strong>Электронная подпись</strong></p>
<p>Застрожин Михаил Сергеевич, к.м.н.,<br>руководитель лаборатории генетики МНПЦ наркологии ДЗМ</p>
<style>
  p {
	color: #000000;
	text-align: right;
	font-size: 11px;
}
</style>
';

// output the sign
$pdf->WriteHTMLCell(140, 20, '60', '249', "$sign", 0,0);
 
 
 //outptut 
 //$pdf->Output();
 
 

//add second page 
  $pdf->AddPage();
 
  
// create left column text
/*
$left_column_text = '
<p>text</p>
<style>
p {
	text-align: center;
	color: #000000;
}
</style>
';
*/

$pdf->SetDrawColor(0);
$pdf->SetTextColor(0);
// Start Transformation
$pdf->StartTransform();
// Rotate 20 degrees counter-clockwise centered by (70,110) which is the lower left corner of the rectangle
$pdf->Rotate(90, 58, 145);
//$pdf->Rect(70, 100, 40, 10, 'D');
$pdf->Text(40, 96, '');
// Stop Transformation
$pdf->StopTransform();


//left column
// set color for background
$pdf->SetFillColor(75, 120, 114);

// set color for text - none
//$pdf->SetTextColor();


// write the left column
$pdf->writeHTMLCell(22, '274', '1', '1', $left_column, 1, 0, 1, true, 'J', true);
//$pdf->writeHTMLCell(30, '260', '1', '1', $left_column_text, 0, 0);


//table of patient
$table1 = '
<table>
<tr>
<td>Пациент</td>
<td>Иванов</td>
<td>ID</td>
<td>0039394</td>
</tr>
<tr>
<td>Дата рождения</td>
<td>01/01/1980</td>
<td>Рост</td>
<td>83</td>
</tr>
<tr>
<td>Вес</td>
<td>80</td>
<td>Пол</td>
<td>Муж</td>
</tr>
<tr>
<td>Раса</td>
<td>Евро</td>
<td>Дата</td>
<td>02/02/20</td>
</tr>
</table>

<style>
table {
	font-size: 11px;
}
</style>
';

//table of patient
$pdf->WriteHTMLCell(120, 30, '23', '20', "$table1", 1,0);


//table of genes
$table_genes = '
<table>
<tr>
<th>ГЕН</th>
<th>ПОЛИМОРФИЗМ</th>
<th>АЛЛЕЛЬ</th>
<th>RS</th>
<th>ГЕНОТИП</th>
<th>АКТИВНОСТЬ</th>
</tr>
<tr>
<td style="color: #FFFFFF; background-color: #5DACA1;">CYP2C19</td>
<td>681G>A</td>
<td>*2</td>
<td>rs4244285</td>
<td>GG</td>
<td>N</td>
</tr>
<tr>
<td style="color: #FFFFFF; background-color: #5DACA1;">CYP2C19</td>
<td>636G>A</td>
<td>*3</td>
<td>rs4986893</td>
<td>GG</td>
<td>N</td>
</tr>
<tr>
<td style="color: #FFFFFF; background-color: #77323D;">CYP2C19</td>
<td>-806C>T</td>
<td>*17</td>
<td>rs12248560</td>
<td>TT</td>
<td>&uarr;&uarr;</td>
</tr>
<tr>
<td style="color: #FFFFFF; background-color: #77323D;">CYP2D6</td>
<td>506-1G>A</td>
<td>*4</td>
<td>rs3892097</td>
<td>AA</td>
<td>&darr;&darr;</td>
</tr>
<tr>
<td style="color: #FFFFFF; background-color: #5DACA1;">CYP3A4</td>
<td>522-191C>T</td>
<td>*22</td>
<td>rs35599367</td>
<td>CC</td>
<td>N</td>
</tr>
<tr>
<td style="color: #FFFFFF; background-color: #5DACA1;">CYP3A5</td>
<td>*14T>C</td>
<td>*3</td>
<td>rs15524</td>
<td>TT</td>
<td>N</td>
</tr>
<tr>
<td style="color: #FFFFFF; background-color: #5DACA1;">ABCB1</td>
<td>3435C>T</td>
<td>*6</td>
<td>rs1045642</td>
<td>CC</td>
<td>N</td>
</tr>

</table>

<style>
th {
	font-size: 10px;
	color: #FFFFFF;
	background-color: #4B7872;
	text-align: center;
}
td {
	font-size: 10px;
	text-align: center;
}
</style>
';

//table of genes output
$pdf->WriteHTMLCell(170, 70, '30', '64', "$table_genes", 0,0);

//text for second page
$text_page2 = '
<p>Имеются данные, свидетельствующие о наличии генетически обусловленных отклонений в скорости метаболизма, что может увеличить риск развития нежелательных реакций на назначаемые лекарственные препараты и, в связи с этим, недостаточной эффективности терапии.</p>
<p>Снижение активности CYP2C19, CYP2D6, CYP3A5 и ABCB1 будет приводить к замедлению элиминации большей части лекарственных средств: антидепрессантов, антипсихотиков, транквилизаторов и антиконвульсантов, то есть к возрастанию риска развития нежелательных реакций. 
</p>
<style>
  p {
	color: #000000;
	font-size: 11px;
}
</style>
';

// output the text
$pdf->WriteHTMLCell(160, 90, '30', '120', "$text_page2", 0,0);

//graph 
$style = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'phase' => 0, 'color' => array(0, 0, 0));
$style2 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 0, 0));
$style3 = array('width' => 0.5, 'cap' => 'round', 'join' => 'round', 'dash' => 0, 'color' => array(0, 0, 0));
$style4 = array('L' => 0,
                'T' => array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => '20,10', 'phase' => 10, 'color' => array(100, 100, 255)),
                'R' => array('width' => 0.50, 'cap' => 'round', 'join' => 'miter', 'dash' => 0, 'color' => array(50, 50, 127)),
                'B' => array('width' => 0.75, 'cap' => 'square', 'join' => 'miter', 'dash' => '30,10,5,10'));
$style5 = array('width' => 0.25, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(0, 64, 128));
$style6 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => '10,10', 'color' => array(0, 128, 0));
$style7 = array('width' => 0.5, 'cap' => 'butt', 'join' => 'miter', 'dash' => 0, 'color' => array(255, 128, 0));



$pdf->Line(40, 180, 40, 220, $style2);
$pdf->Line(42, 201, 196, 201, $style3);

//text for the graph persent
$pdf->WriteHTMLCell(15, 10, '27', '179', "<small>200%</small>");
$pdf->WriteHTMLCell(15, 10, '27', '189', "<small>150%</small>");
$pdf->WriteHTMLCell(15, 10, '27', '199', "<small>100%</small>");
$pdf->WriteHTMLCell(15, 10, '29', '209', "<small>50%</small>");
$pdf->WriteHTMLCell(15, 10, '30', '219', "<small>0%</small>");

//text down graph
$pdf->WriteHTMLCell(30, 20, '28', '227', "<small>Активность</small>");
$pdf->WriteHTMLCell(30, 20, '50', '227', "<small>CYP2C19*2</small>");
$pdf->WriteHTMLCell(30, 20, '72', '227', "<small>CYP2C19*3</small>");
$pdf->WriteHTMLCell(30, 20, '94', '227', "<small>CYP2C19*17</small>");
$pdf->WriteHTMLCell(30, 20, '118', '227', "<small>CYP2D6*4</small>");
$pdf->WriteHTMLCell(30, 20, '138', '227', "<small>CYP3A4*22</small>");
$pdf->WriteHTMLCell(30, 20, '160', '227', "<small>CYP3A5*3</small>");
$pdf->WriteHTMLCell(30, 20, '182', '227', "<small>ABCB1*6</small>");

//sign of doctor
$sign = '<p><strong>Электронная подпись</strong></p>
<p>Застрожин Михаил Сергеевич, к.м.н.,<br>руководитель лаборатории генетики МНПЦ наркологии ДЗМ</p>
<style>
  p {
	color: #000000;
	text-align: right;
	font-size: 11px;
}
</style>
';

// output the sign
$pdf->WriteHTMLCell(140, 20, '60', '249', "$sign", 0,0);

// Regular triangle
//$pdf->Text(5, 169, '');
//$pdf->SetLineStyle($style5);
//$pdf->RegularPolygon(126, 207, 12, 3, 0, '', array('all' => $style5), array(200, 220, 200), '', array(255, 200, 100));




//outptut 
 $pdf->Output('example.pdf', 'I');
 
