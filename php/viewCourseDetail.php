<?php
require_once 'fpdf/fpdf.php';
session_start();
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}

// Select data for teachers detail from MySQL database 
$sql = "select * from course_bs ";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Course Detail","0","1","C");
//table column
//$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(30,10,"Course id","1","0","C");
$pdf->Cell(95,10,"Course Name","1","0","C");
$pdf->Cell(30,10,"Course Code","1","0","C");
$pdf->Cell(20,10,"Dept","1","0","C");
$pdf->Cell(20,10,"Semester","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
    $courseid=$row->course_id;
    $coursename=$row->Course_name;
    $coursecode=$row->Course_code;
  $Department= $row->department_name;
  $semester=$row->semester;
 $pdf->Cell(30,10,$courseid,"1","0","C");
  $pdf->Cell(95,10, $coursename,"1","0","C");
  $pdf->Cell(30,10,$coursecode,"1","0","C");
  $pdf->Cell(20,10,$Department,"1","0","C");
  $pdf->Cell(20,10,$semester,"1","0","C");
  $pdf->Ln();
}
$pdf->Output();

?>















