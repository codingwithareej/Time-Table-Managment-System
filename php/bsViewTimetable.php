<?php
require_once 'fpdf/fpdf.php';
session_start();
include 'connection.php';
//Check for connection error
if($con->connect_error){
  die("Error in DB connection: ".$conn->connect_errno." : ".$conn->connect_error);    
}
// Select data from MySQL database semester I
$sql = "select starting_time ,ending_time ,fri_starting_time,fri_ending_time,`department_name`, `semester`, `Course_code`, `teacher_name`, `day`, `room_no` FROM `timetable_bs` t1 INNER JOIN timetable t2 on t1.id=t2.id
 where semester='I' And department_name='BSIT' ORDER BY t1.id";
$result = mysqli_query($con, $sql);
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Timetable BS","0","1","C");
$pdf->Cell(180,20,"Semester I","0","1","C");
//table column
$pdf->SetTextColor(0,0,0);

$pdf->Cell(32,10,"Timming","1","0","C");
$pdf->Cell(32,10,"Fri Timming","1","0","C");
$pdf->Cell(17,10,"d-name","1","0","C");
$pdf->Cell(35,10,"C-Code","1","0","C");
$pdf->Cell(38,10,"T-Name","1","0","C");
$pdf->Cell(12,10,"Day","1","0","C");
$pdf->Cell(12,10,"R-no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $deptname = $row->department_name;
  $Coursecode=$row->Course_code;
  $Teachername=$row->teacher_name;
  $day=$row->day;
  $room_no= $row->room_no;
  $pdf->Cell(32,10,$Timming,"1","0","C");
  $pdf->Cell(32,10,$friTimming,"1","0","C");
  $pdf->Cell(17,10,$deptname,"1","0","C");
  $pdf->Cell(35,10,$Coursecode,"1","0","C");
  $pdf->Cell(38,10,$Teachername,"1","0","C");
  $pdf->Cell(12,10,$day,"1","0","C");
 $pdf->Cell(12,10,$room_no,"1","0","C");
  $pdf->Ln();
}

// Select data from MySQL database semester III
$sql = "select starting_time ,ending_time ,fri_starting_time,fri_ending_time,`department_name`, `semester`, `Course_code`, `teacher_name`, `day`, `room_no` FROM `timetable_bs` t1 INNER JOIN timetable t2 on t1.id=t2.id
 where semester='III' AND  department_name='BSIT' ORDER BY t1.id";
$result = mysqli_query($con, $sql);

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Semester III","0","1","C");
//table column
$pdf->SetTextColor(0,0,0);

$pdf->Cell(32,10,"Timming","1","0","C");
$pdf->Cell(32,10,"Fri Timming","1","0","C");
$pdf->Cell(17,10,"d-name","1","0","C");
$pdf->Cell(35,10,"C-Code","1","0","C");
$pdf->Cell(38,10,"T-Name","1","0","C");
$pdf->Cell(12,10,"Day","1","0","C");
$pdf->Cell(12,10,"R-no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $deptname = $row->department_name;
  $Coursecode=$row->Course_code;
  $Teachername=$row->teacher_name;
  $day=$row->day;
  $room_no= $row->room_no;
  $pdf->Cell(32,10,$Timming,"1","0","C");
  $pdf->Cell(32,10,$friTimming,"1","0","C");
  $pdf->Cell(17,10,$deptname,"1","0","C");
  $pdf->Cell(35,10,$Coursecode,"1","0","C");
  $pdf->Cell(38,10,$Teachername,"1","0","C");
  $pdf->Cell(12,10,$day,"1","0","C");
 $pdf->Cell(12,10,$room_no,"1","0","C");
  $pdf->Ln();
}

// Select data from MySQL database semester V
$sql = "select starting_time ,ending_time ,fri_starting_time,fri_ending_time,`department_name`, `semester`, `Course_code`, `teacher_name`, `day`, `room_no` FROM `timetable_bs` t1 INNER JOIN timetable t2 on t1.id=t2.id
 where semester='V' AND  department_name='BSIT' ORDER BY t1.id";
$result = mysqli_query($con, $sql);
$pdf->AddPage();

$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Semester V","0","1","C");
//table column
$pdf->SetTextColor(0,0,0);

$pdf->Cell(32,10,"Timming","1","0","C");
$pdf->Cell(32,10,"Fri Timming","1","0","C");
$pdf->Cell(17,10,"d-name","1","0","C");
$pdf->Cell(35,10,"C-Code","1","0","C");
$pdf->Cell(38,10,"T-Name","1","0","C");
$pdf->Cell(12,10,"Day","1","0","C");
$pdf->Cell(12,10,"R-no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $deptname = $row->department_name;
  $Coursecode=$row->Course_code;
  $Teachername=$row->teacher_name;
  $day=$row->day;
  $room_no= $row->room_no;
  $pdf->Cell(32,10,$Timming,"1","0","C");
  $pdf->Cell(32,10,$friTimming,"1","0","C");
  $pdf->Cell(17,10,$deptname,"1","0","C");
  $pdf->Cell(35,10,$Coursecode,"1","0","C");
  $pdf->Cell(38,10,$Teachername,"1","0","C");
  $pdf->Cell(12,10,$day,"1","0","C");
 $pdf->Cell(12,10,$room_no,"1","0","C");
  $pdf->Ln();
}

// Select data from MySQL database semester VII
$sql = "select starting_time ,ending_time ,fri_starting_time,fri_ending_time,`department_name`, `semester`, `Course_code`, `teacher_name`, `day`, `room_no` FROM `timetable_bs` t1 INNER JOIN timetable t2 on t1.id=t2.id
 where semester='VII' AND department_name='BSIT' ORDER BY t1.id";
$result = mysqli_query($con, $sql);


$pdf->SetFont('Arial','B',12);
$pdf->SetTextColor(0,0,0);
$pdf->Cell(180,20,"Semester VII","0","1","C");
//table column
$pdf->SetTextColor(0,0,0);

$pdf->Cell(32,10,"Timming","1","0","C");
$pdf->Cell(32,10,"Fri Timming","1","0","C");
$pdf->Cell(17,10,"d-name","1","0","C");
$pdf->Cell(35,10,"C-Code","1","0","C");
$pdf->Cell(38,10,"T-Name","1","0","C");
$pdf->Cell(12,10,"Day","1","0","C");
$pdf->Cell(12,10,"R-no","1","1","C");
$pdf->SetFont('Arial','B',10);
while($row = $result->fetch_object()){
  $Timming = $row->starting_time."-".$row->ending_time;
  $friTimming = $row->fri_starting_time."-".$row->fri_ending_time;
  $deptname = $row->department_name;
  $Coursecode=$row->Course_code;
  $Teachername=$row->teacher_name;
  $day=$row->day;
  $room_no= $row->room_no;
  $pdf->Cell(32,10,$Timming,"1","0","C");
  $pdf->Cell(32,10,$friTimming,"1","0","C");
  $pdf->Cell(17,10,$deptname,"1","0","C");
  $pdf->Cell(35,10,$Coursecode,"1","0","C");
  $pdf->Cell(38,10,$Teachername,"1","0","C");
  $pdf->Cell(12,10,$day,"1","0","C");
 $pdf->Cell(12,10,$room_no,"1","0","C");
  $pdf->Ln();
}
$pdf->Output();

?>















