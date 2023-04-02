<?php
require_once 'fpdf/fpdf.php';
session_start();
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}

// Select data for teachers detail from MySQL database 
$sql = "select * FROM `login` where status!='Administrator' ORDER BY `department`";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Instructor Detail","0","1","C");
//table column
$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(40,10,"Teacher Name","1","0","C");
$pdf->Cell(55,10,"Email","1","0","C");
$pdf->Cell(35,10,"Password","1","0","C");
$pdf->Cell(40,10,"Department","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Teacher_Name= $row->username;
  $Email= $row->email;
  $Password= $row->password;
  $Department= $row->department;
  $pdf->Cell(40,10, $Teacher_Name,"1","0","C");
  $pdf->Cell(55,10,$Email,"1","0","C");
  $pdf->Cell(35,10,$Password,"1","0","C");
  $pdf->Cell(40,10,$Department,"1","0","C");
  $pdf->Ln();
}
$pdf->Output();

?>















