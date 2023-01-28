<?php
session_start();
include 'connection.php';
$name=$_POST['username'];
$pass=$_POST['password'];
$s="select * from login where username='$name' && password ='$pass'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num){
if($name=='Admin' && $pass=='Admin00')
{
  header('location:../dashBoardAdmin.html');
}
else{
  $_SESSION["username"]=$name;
  header('location:../dashBoardTeacher.html');
}
}
else{
  echo"<script>alert('username and password is incorrect')</script> ";  
  header('location:../login.html'); 
}
?>