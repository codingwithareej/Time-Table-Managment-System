<!DOCTYPE html>
<html>
  <head>
    <title>Update BS TimeTable</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png" />
    <link type="text/css" rel="stylesheet" href="update.css" />
  </head>
  <body>
    <!-- section of the page-->
    <section>
      <!--section 1-->
      <div class="section2">
        <a href='updateInstructor.php'>check form</a>
        <h2 class="heading">BS Timetable</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['id'];
$showquery="select * FROM `login` where id=$idupdate ORDER BY `department`";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
//varaible for fetch data
$idupdate=$_GET['id'];
//varaible
$email=$_POST['email'];
$userName=$_POST['name'];
$pass=$_POST['pass'];
$departmentName=$_POST['deptName'];
$query="UPDATE `login` SET `email`='$email',`username`='$userName',`password`='$pass',`department`='$departmentName' WHERE id=$idupdate ";
$res=mysqli_query($con,$query);
if($res){
echo" <script type=text/javascript>alert('data update Succesfully')</script>";
}
else{
echo" <script type=text/javascript>alert('data updation is not Succesfull')</script>";
}
}
?>
              <div class="inputbx">
                <span class="span">Email</span>
                <input type="text" name="email" value="<?php echo $arrdata['email']?>" required style="margin-left:50px;"/>
              </div>
              <div class="inputbx">
                <span class="span">User Name</span>
                <input type="text" name="name" value="<?php echo $arrdata['username'];?>" placeholder="Bs" required style="margin-left:11px;" />
              </div>
              <div class="inputbx">
                <span class="span">Password</span>
                <input type="text" name="pass" value="<?php echo $arrdata['password'];?>" required style="margin-left:20px;" />
              </div>
              <div class="inputbx">
                <span class="span">Department</span>
                <input type="text" name="deptName" value="<?php echo $arrdata['department'];?>" required />
              </div>
              <div class="inputbx">
                <input type="submit" value="Update" name='submit'required style="margin-left:10em;"/>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
