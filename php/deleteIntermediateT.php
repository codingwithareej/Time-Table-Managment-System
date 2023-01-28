<?php
include 'connection.php';
$iddelete=$_GET['id'];
$deletequery="delete FROM `timetable_intermediate` where ids=$iddelete";
$query=mysqli_query($con,$deletequery);
header('location:updateTimeIntermediate.php');
?>