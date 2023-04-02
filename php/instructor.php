<?php
include 'connection.php';
$email=$_POST['email'];
$userName=$_POST['name'];
$pass=$_POST['pass'];
$departmentName=$_POST['deptName'];
//Query
$s="select * FROM `login` WHERE `email`='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num){
    echo"<script>alert('email is already taken');</script>";
}
else{

$s="select * FROM `login` WHERE `username`='$userName'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num){
    echo"<script>alert('username is already taken');</script>";
}
else{

    $reg="insert into login(email, username, password, department) VALUES ('$email','$userName','$pass','$departmentName')";
    mysqli_query($con,$reg);
    echo" <script>alert('data enter Succesfully');</script>";
}
}
?>
