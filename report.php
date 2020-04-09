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
$pdf->WriteHTMLCell(170, 40, '90', '0', "", 1,0);
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
$pdf->WriteHTMLCell(120, 30, '80', '50', "$text_intro", 0,0);

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
$pdf->WriteHTMLCell(140, 20, '60', '242', "$sign", 0,0);
 
 
 //outptut 
 //$pdf->Output();
 
 

//add second page 
  $pdf->AddPage();
  

// create left column
$left_column = '';


//left column
// set color for background
$pdf->SetFillColor(75, 120, 114);

// set color for text - none
$pdf->SetTextColor();

// write the left column
$pdf->writeHTMLCell(22, '274', '1', '1', $left_column, 1, 0, 1, true, 'J', true);


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


//outptut 
 $pdf->Output();
 
