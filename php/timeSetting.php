<?php
include 'connection.php';
//varaible
$id=$_POST['id'];
$start=$_POST['start'];
$end=$_POST['end'];
$fri_start=$_POST['fri_start'];
$fri_end=$_POST['fri_end'];

$s="select * FROM `timetable` WHERE `id`='$id'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result); 

if($num){
echo" <script type=text/javascript>alert('time slot already exist')</script>";
}
else{
$reg="INSERT INTO `timetable`(`t_id`, `id`, `starting_time`, `ending_time`, `fri_starting_time`, `fri_ending_time`) VALUES ('','$id','$start','$end','$fri_start','$fri_end')";
mysqli_query($con,$reg);
echo" <script type=text/javascript>alert('data enter Succesfully')</script>";
}
?>