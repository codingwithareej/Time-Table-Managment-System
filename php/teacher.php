<?php
require_once 'fpdf/fpdf.php';
session_start();
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database
$user=$_SESSION["username"];
$sql = "select starting_time ,ending_time ,fri_starting_time,fri_ending_time,`department_name`,`semester`,`Course_code`,`day`,`room_no` FROM `timetable_bs` t1 INNER JOIN timetable t2 on t1.id=t2.id
WHERE `teacher_name`='$user' ORDER BY t1.id";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Teacher Timetable","0","1","C");
$pdf->Cell(180,20,"$user","0","1","C");
$pdf->Cell(180,20,"BS Timetable","0","1","C");
//table column
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,10,"Timming","1","0","C");
$pdf->Cell(40,10,"Friday Timming","1","0","C");
$pdf->Cell(24,10,"Dept Name","1","0","C");
$pdf->Cell(20,10,"Semester","1","0","C");
$pdf->Cell(28,10,"Course Code","1","0","C");
$pdf->Cell(20,10,"Day","1","0","C");
$pdf->Cell(20,10,"Room no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $deptname = $row->department_name;
  $semester=$row->semester;
  $Coursecode=$row->Course_code;
  $day=$row->day;
  $room_no= $row->room_no;
  $pdf->Cell(40,10,$Timming,"1","0","C");
  $pdf->Cell(40,10,$friTimming,"1","0","C");
  $pdf->Cell(24,10,$deptname,"1","0","C");
  $pdf->Cell(20,10,$semester,"1","0","C");
  $pdf->Cell(28,10,$Coursecode,"1","0","C");
  $pdf->Cell(20,10,$day,"1","0","C");
 $pdf->Cell(20,10,$room_no,"1","0","C");
  $pdf->Ln();
}

$sql = "SELECT starting_time ,ending_time,fri_starting_time,fri_ending_time,class,subject_name,part,room_no FROM timetable_intermediate t1 INNER JOIN timetable t2 on t1.id=t2.id INNER JOIN intermediate_subject t3 on t1.subject_id=t3.subject_id WHERE `teacher_name`='$user' ORDER BY t1.id";
$result = mysqli_query($con, $sql);
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Intermediate Timetable","0","1","C");
//table column
$pdf->SetLeftMargin(15);
$pdf->SetTextColor(0,0,0);

$pdf->Cell(40,10,"Timming","1","0","C");
$pdf->Cell(40,10,"Friday Timming","1","0","C");
$pdf->Cell(24,10,"Class","1","0","C");
$pdf->Cell(20,10,"part","1","0","C");
$pdf->Cell(35,10,"Subject Name","1","0","C");
$pdf->Cell(20,10,"Room no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $class = $row->class;
  $subjectname=$row->subject_name;
  $part=$row->part;
  $room_no= $row->room_no;
  $pdf->Cell(40,10,$Timming,"1","0","C");
  $pdf->Cell(40,10,$friTimming,"1","0","C");
  $pdf->Cell(24,10,$class,"1","0","C");
  $pdf->Cell(20,10,$part,"1","0","C");
  $pdf->Cell(35,10,$subjectname,"1","0","C");
 $pdf->Cell(20,10,$room_no,"1","0","C");
  $pdf->Ln();
}









$pdf->Output();

?>















