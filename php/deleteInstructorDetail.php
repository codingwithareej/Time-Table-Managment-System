<?php
include 'connection.php';
$idDelete=$_GET['id']; 
$deletequery="delete FROM `login` WHERE `id`=$idDelete";
$query=mysqli_query($con,$deletequery);
header('location:updateInstructor.php');
?>