<?php
include 'connection.php';
$iddelete=$_GET['id'];
$deletequery="DELETE FROM `intermediate_subject` WHERE `id`=$iddelete";
$query=mysqli_query($con,$deletequery);
header('location:updateSubjectDetail.php');
?>