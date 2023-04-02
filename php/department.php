<?php
include 'connection.php';
//varaible 
$Name=$_POST['name'];
$departmentname=$_POST['deptname'];
$s="select * FROM `teacher_ttms` where `teacher_name`='$Name' AND department_name='$departmentname'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 

if($num){
    echo"<script>alert('Teacher name already exists');</script>";
}
else{
$reg="insert into teacher_ttms (`id`, `teacher_name`, `department_name`) VALUES ('','$Name','$departmentname')";
mysqli_query($con,$reg);
echo"<script>alert('data enter Succesfully');</script> ";
}
?>