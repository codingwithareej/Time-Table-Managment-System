<!DOCTYPE html>
<html>
  <head>
    <title>Update Course Detail</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png" />
    <link type="text/css" rel="stylesheet" href="update.css" />
  </head>
  <body>
    <!-- section of the page-->
    <section>
      <!--section 1-->
      <div class="section2">
        <a href='bsUpdateTimetable.php'>check form</a>
        <h2 class="heading">BS Timetable</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['ids'];
$showquery="select * from `timetable_bs` where s_id=$idupdate";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);
if(isset($_POST['submit'])){
//varaible for fetch data
$idupdate=$_GET['ids'];
//varaible
$id=$_POST['id'];
$bs=$_POST['bs'];
$sem=$_POST['sem'];
$Coursecode=$_POST['CourseCode'];
$name=$_POST['name'];
$days=$_POST['day'];
$room=$_POST['room'];
$query="update `timetable_bs` SET  `id`='$id',`department_name`='$bs',`semester`='$sem',`Course_code`='$Coursecode',`teacher_name`='$name',`day`='$days',`room_no`='$room' WHERE s_id=$idupdate";
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
                <span class="span"> ID</span>
                <input type="text" name="id" value="<?php echo $arrdata['id']?>" required style="margin-left:35px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Department Name</span>
                <input type="text" name="bs" value="<?php echo $arrdata['department_name'];?>" placeholder="Bs" required style="margin-left:11px;" />
              </div>
              <div class="inputbx">
                <span class="span">Semester</span>
                <input type="text" name="sem" value="<?php echo $arrdata['semester'];?>" required style="margin-left:15px;" />
              </div>
              <div class="inputbx">
                <span class="span">Course Code</span>
                <input type="text"  name="CourseCode" value="<?php echo $arrdata['Course_code'];?>" required style="margin-left:21px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Teacher Name</span>
                <input type="text"  name="name" value="<?php echo $arrdata['teacher_name'];?>" required style="margin-left:45px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Days</span>
                <input type="text"  name="day" value="<?php echo $arrdata['day'];?>" required style="margin-left:45px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Room</span>
                <input type="text"  name="room" value="<?php echo $arrdata['room_no'];?>" required style="margin-left:45px;"/>
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
