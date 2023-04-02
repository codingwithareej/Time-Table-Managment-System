<?php
require_once 'fpdf/fpdf.php';
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database partI
$sql = "select subject_name ,starting_time ,ending_time ,fri_starting_time,fri_ending_time ,room_no , teacher_name from timetable_intermediate t1  INNER JOIN timetable t2 on t1.id=t2.id WHERE t1.class='ICS' AND t1.part='part-I'";
$result = mysqli_query($con, $sql);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"ICS part-I","0","1","C");
//table column
$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,10,"Timming","1","0","C");
$pdf->Cell(40,10,"Friday Timming","1","0","C");
$pdf->Cell(38,10,"Teacher Name","1","0","C");
$pdf->Cell(38,10,"Subject Name","1","0","C");
$pdf->Cell(20,10,"Room no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $name = $row->teacher_name;
  $room_no= $row->room_no;
  $subject_name= $row->subject_name;
  $pdf->Cell(40,10,$Timming,"1","0","C");
  $pdf->Cell(40,10,$friTimming,"1","0","C");
  $pdf->Cell(38,10,$name,"1","0","C");
  $pdf->Cell(38,10,$subject_name,"1","0","C");
  $pdf->Cell(20,10,$room_no,"1","0","C");
  $pdf->Ln();
}

//FSC pre-Engeneering
$sql = "select subject_name ,starting_time ,ending_time ,fri_starting_time,fri_ending_time ,room_no , teacher_name from timetable_intermediate t1 INNER JOIN timetable t2 on t1.id=t2.id WHERE t1.class='FSC pre-engineering' AND t1.part='part-I'";
$result = mysqli_query($con, $sql);

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(160,20,"FSC pre-engineering part-I","0","1","C");
//table column
$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,10,"Timming","1","0","C");
$pdf->Cell(40,10,"Friday Timming","1","0","C");
$pdf->Cell(38,10,"Teacher Name","1","0","C");
$pdf->Cell(30,10,"Subject Name","1","0","C");
$pdf->Cell(20,10,"Room no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $name = $row->teacher_name;
  $room_no= $row->room_no;
  $subject_name= $row->subject_name;
  $pdf->Cell(40,10,$Timming,"1","0","C");
  $pdf->Cell(40,10,$friTimming,"1","0","C");
  $pdf->Cell(38,10,$name,"1","0","C");
  $pdf->Cell(30,10,$subject_name,"1","0","C");
  $pdf->Cell(20,10,$room_no,"1","0","C");
  $pdf->Ln();
}
$sql = "select subject_name ,starting_time ,ending_time ,fri_starting_time,fri_ending_time ,room_no , teacher_name from timetable_intermediate t1  INNER JOIN timetable t2 on t1.id=t2.id WHERE t1.class='ICS' AND t1.part='part-II'";
$result = mysqli_query($con, $sql);

//Select data from MySQL database partII
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"ICS part-II","0","1","C");
//table column
$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,10,"Timming","1","0","C");
$pdf->Cell(40,10,"Friday Timming","1","0","C");
$pdf->Cell(38,10,"Teacher Name","1","0","C");
$pdf->Cell(38,10,"Subject Name","1","0","C");
$pdf->Cell(20,10,"Room no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $name = $row->teacher_name;
  $room_no= $row->room_no;
  $subject_name= $row->subject_name;
  $pdf->Cell(40,10,$Timming,"1","0","C");
  $pdf->Cell(40,10,$friTimming,"1","0","C");
  $pdf->Cell(38,10,$name,"1","0","C");
  $pdf->Cell(38,10,$subject_name,"1","0","C");
  $pdf->Cell(20,10,$room_no,"1","0","C");
  $pdf->Ln();
}

//FSC pre-Engeneering
$sql = "select subject_name ,starting_time ,ending_time ,fri_starting_time,fri_ending_time ,room_no , teacher_name from timetable_intermediate t1  INNER JOIN timetable t2 on t1.id=t2.id WHERE t1.class='FSC pre-engineering' AND t1.part='part-II'";
$result = mysqli_query($con, $sql);

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(160,20,"FSC pre-engineering part-II","0","1","C");
//table column
$pdf->SetLeftMargin(20);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,10,"Timming","1","0","C");
$pdf->Cell(40,10,"Friday Timming","1","0","C");
$pdf->Cell(38,10,"Teacher Name","1","0","C");
$pdf->Cell(30,10,"Subject Name","1","0","C");
$pdf->Cell(20,10,"Room no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $name = $row->teacher_name;
  $room_no= $row->room_no;
  $subject_name= $row->subject_name;
  $pdf->Cell(40,10,$Timming,"1","0","C");
  $pdf->Cell(40,10,$friTimming,"1","0","C");
  $pdf->Cell(38,10,$name,"1","0","C");
  $pdf->Cell(30,10,$subject_name,"1","0","C");
  $pdf->Cell(20,10,$room_no,"1","0","C");
  $pdf->Ln();
}





$pdf->Output();
?>















