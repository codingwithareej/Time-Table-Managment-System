<?php
include 'connection.php';
$iddelete=$_GET['id'];
$deletequery="DELETE FROM `course_bs` WHERE `id`=$iddelete";
$query=mysqli_query($con,$deletequery);
header('location:updateCourseDetail.php');
?>