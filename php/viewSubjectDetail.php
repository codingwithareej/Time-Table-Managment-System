<?php
require_once 'fpdf/fpdf.php';
session_start();
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}

// Select data for teachers detail from MySQL database 
$sql = "select * from `intermediate_subject` ";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Subject Detail","0","1","C");
//table column
$pdf->SetLeftMargin(50);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(30,10,"Subject id","1","0","C");
$pdf->Cell(50,10,"Subject Name","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
    $Subjectid=$row->subject_id;
    $Subjectname=$row->subject_name;
 $pdf->Cell(30,10,$Subjectid,"1","0","C");
  $pdf->Cell(50,10, $Subjectname,"1","0","C");
  $pdf->Ln();
}
$pdf->Output();

?>















