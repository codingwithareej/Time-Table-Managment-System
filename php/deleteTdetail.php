<?php
include 'connection.php';
$iddelete=$_GET['ids'];
$deletequery="DELETE FROM `teacher_ttms` Where `id`=$iddelete";
$query=mysqli_query($con,$deletequery);
header('location:updateThDetail.php');
?>