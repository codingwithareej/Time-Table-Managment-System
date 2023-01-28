<?php
include 'connection.php';
//varaible
$subjectId=$_POST['subjectid'];
$subjectName=$_POST['subjectname'];

$s="select * from intermediate_subject where subject_name='$subjectName' or subject_id='$subjectId'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 

if($num){
echo" <script type=text/javascript>alert('name or Id is already taken')</script>";
}
else{
$reg="insert  INTO intermediate_subject(`id`, `subject_id`, `subject_name`) VALUES ('','$subjectId','$subjectName')";
mysqli_query($con,$reg);
echo" <script type=text/javascript>alert('data enter Succesfully')</script>";
}
?>