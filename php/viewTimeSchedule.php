<?php
require_once 'fpdf/fpdf.php';
session_start();
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}

// Select data for teachers detail from MySQL database 
$sql = "select * from `timetable` ";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Time Detail","0","1","C");
//table column
$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(18,10,"id","1","0","C");
$pdf->Cell(30,10,"Starting Time","1","0","C");
$pdf->Cell(30,10,"Ending Time","1","0","C");
$pdf->Cell(40,10,"Fri Starting Time","1","0","C");
$pdf->Cell(40,10,"Fri Ending Time","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
    $id=$row->id;
    $Start_time=$row->starting_time;
    $End_time=$row->ending_time;
    $Fri_Start_time=$row->fri_starting_time;
    $Fri_End_time=$row->fri_ending_time;
 $pdf->Cell(18,10,$id,"1","0","C");
  $pdf->Cell(30,10, $Start_time,"1","0","C");
  $pdf->Cell(30,10,  $End_time,"1","0","C");
  $pdf->Cell(40,10, $Fri_Start_time,"1","0","C");
  $pdf->Cell(40,10,  $Fri_End_time,"1","0","C");
  $pdf->Ln();
}
$pdf->Output();

?>















