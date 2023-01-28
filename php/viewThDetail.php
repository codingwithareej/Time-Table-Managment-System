<?php
require_once 'fpdf/fpdf.php';
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data for teachers detail from MySQL database 
$sql = "select * FROM `teacher_ttms` ORDER BY `department_name`";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Department Detail","0","1","C");
//table column
$pdf->SetLeftMargin(30);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(70,10,"Teacher Name","1","0","C");
$pdf->Cell(70,10,"Department","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){ 
  $Teacher_Name= $row->teacher_name;
  $Department= $row->department_name;
  $pdf->Cell(70,10, $Teacher_Name,"1","0","C");
  $pdf->Cell(70,10,$Department,"1","0","C");
  $pdf->Ln();
}
$pdf->Output();

?>















