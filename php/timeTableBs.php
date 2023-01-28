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
$s="select * FROM `timetable_bs` WHERE room_no='$room' AND id='$id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 

if($num){
echo" <script type=text/javascript>alert('room no is already taken at the exact time slot CHANGE room no or time slot ')</script>";
}
else{
    $reg="insert into timetable_bs (`id`, `department_name`, `semester`, `Course_code`, `teacher_name`, `day`, `room_no`) VALUES ('$id', '$bs', '$sem', '$Coursecode', '$name', '$days', '$room')";
    mysqli_query($con,$reg);
    echo" <script type=text/javascript>alert('data enter Succesfully')</script>";
}
?>