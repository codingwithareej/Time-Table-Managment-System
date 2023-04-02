<?php
include 'connection.php';
//varaible
$id=$_POST['id'];
$bs=$_POST['bs'];
$sem=$_POST['sem'];
$Coursecode=$_POST['Coursecode'];
$name=$_POST['name'];
$days=$_POST['days'];
$room=$_POST['room'];
//QUERY NO 1
$s="select * from timetable_bs WHERE  id='$id' AND teacher_name='$name' AND day='$days'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 
if($num){
echo" <script type=text/javascript>alert('instructor is not avaliable on these days in this time slot')</script>";
}
else{


//QUERY NO 2
$s="select * from timetable_bs WHERE  id='$id' AND room_no='$room' AND day='$days'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 
if($num){
echo" <script type=text/javascript>alert('room is not avaliable on these days in this time slot this time slot')</script>";
}
else{
    $reg="insert into timetable_bs (`id`, `department_name`, `semester`, `Course_code`, `teacher_name`, `day`, `room_no`) VALUES ('$id', '$bs', '$sem', '$Coursecode', '$name', '$days', '$room')";
    mysqli_query($con,$reg);
    echo" <script type=text/javascript>alert('data enter Succesfully')</script>";
}
}
?>