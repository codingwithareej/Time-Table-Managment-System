<?php

include 'connection.php';
//varaible
$Courseid=$_POST['Courseid'];
$CourseName=$_POST['Coursename'];
$CourseCode=$_POST['Coursecode'];
$depBs=$_POST['bs'];
$depSem=$_POST['sem'];
$s="select * from course_bs where Course_name='$CourseName'";

$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 

if($num==1){
echo"<script>alert('course Name already taken');</script>";
}
else{
$reg="insert into course_bs (`course_id`, `Course_name`, `Course_code`, `department_name`, `semester`) 
VALUES ('$Courseid','$CourseName','$CourseCode','$depBs','$depSem')";
mysqli_query($con,$reg);
echo"<script>alert('data enter Succesfully');</script>";
}
?>