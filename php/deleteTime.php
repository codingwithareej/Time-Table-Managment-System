<?php
include 'connection.php';
$iddelete=$_GET['id'];
$deletequery="DELETE FROM `timetable` WHERE `id`=$iddelete";
$query=mysqli_query($con,$deletequery);
header('location:updateTimeSchedule.php');
?>