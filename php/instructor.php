<?php
include 'connection.php';
$email=$_POST['email'];
$userName=$_POST['name'];
$pass=$_POST['pass'];
$departmentName=$_POST['deptName'];
//Query
$s="select * FROM login WHERE username='$userName' and email='$email'";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num){
    echo"username already taken";
}
else{
$reg="insert into login(`email`, `username`, `password`, `department`) VALUES ('$email','$userName','$pass','$departmentName')";
mysqli_query($con,$reg);
echo" <script>alert('data enter Succesfully');</script>";
}
?>
