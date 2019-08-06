<?php
include('database.php');

$database = new Database();

$s=$_GET['stfid'];
$c=$_GET['cc'];
$result = $database->runQuery("SELECT Unit_no,Title_name,Subdivision,Date_planned,Hours,Date_complition,Methodology,Learning_outcomes_achieved FROM ct where Staff_id='$s' and Course_code='$c'");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='crud' 
AND `TABLE_NAME`='books'
and `COLUMN_NAME` in ('Unit_no','Title_name','Subdivision','Date_planned','Hours','Date_complition','Methodology','Learning_outcomes_achieved')");

require('fpdf/fpdf.php');
$pdf = new FPDF();

$pdf->AddPage();
$pdf->SetFont('Arial','B',4);




if(
!$result){



echo "<script> alert('Record Not Found, Plz Check Your Staff Id or Course Code'); </script>";
echo "<script> location.href='pdf2.php'; </script>";
}foreach($result as $row) {	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(24,4,$column,1);
}
$pdf->Output();




?>