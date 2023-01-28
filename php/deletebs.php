<?php
include 'connection.php';
$idDelete=$_GET['id']; 
$deletequery="DELETE FROM `timetable_bs` WHERE `s_id`=$idDelete";
$query=mysqli_query($con,$deletequery);
header('location:updatetimetable_bs.php');
?>