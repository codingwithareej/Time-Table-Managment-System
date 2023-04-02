<?php
include 'connection.php';
//varaible
$id=$_POST['id'];
$class=$_POST['class'];
$subjectname=$_POST['subjectname'];
$part=$_POST['part'];
$name=$_POST['name']; 
$room_no=$_POST['room_no'];

$s="select * from timetable_intermediate where room_no='$room_no' and id='$id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 

if($num){
echo" <script type=text/javascript>alert('room is already occupied by some other class in the same time slot CHANGE room no or time slot')</script>";
}
else{
$reg="insert into timetable_intermediate(`id`, `class`, `subject_name`, `part`, `teacher_name`, `room_no`) VALUES ('$id','$class','$subjectname','$part','$name','$room_no')";
mysqli_query($con,$reg);
echo" <script type=text/javascript>alert('data enter Succesfully')</script>";
}
?>