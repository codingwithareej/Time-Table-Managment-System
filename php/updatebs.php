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
        <a href='updateTimetable_bs.php'>check form</a>
        <h2 class="heading">BS Timetable</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['id'];
$showquery="select s_id,t2.id,starting_time ,ending_time ,fri_starting_time,fri_ending_time,`department_name`,`semester`,`Course_code`, `teacher_name`,`day`,`room_no`,t2.id FROM `timetable_bs` t1 INNER JOIN timetable t2 on t1.id=t2.id
where s_id=$idupdate ORDER BY t1.id  ";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
//varaible for fetch data
$idupdates=$_GET['id'];
//varaible
$id=$_POST['id'];
$bs=$_POST['bs'];
$sem=$_POST['sem'];
$Coursecode=$_POST['Coursecode'];
$name=$_POST['name'];
$days=$_POST['days'];
$room=$_POST['room'];
$query="UPDATE `timetable_bs` SET `id`='$id',`department_name`='$bs',`semester`='$sem',`Course_code`='$Coursecode',`teacher_name`='$name',`day`='$days',`room_no`='$room' WHERE  s_id=$idupdate";
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
                <span class="span">Time id</span>
                <input type="text" name="id" value="<?php echo $arrdata['id']?>" required style="margin-left:73px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Department</span>
                <input type="text" name="bs" value="<?php echo $arrdata['department_name'];?>" placeholder="Bs" required style="margin-left:36px;" />
                <input type="text" name="sem" value="<?php echo $arrdata['semester'];?>" placeholder="Sem" required />
              </div>
              <div class="inputbx">
                <span class="span">Course Code</span>
                <input type="text" name="Coursecode" value="<?php echo $arrdata['Course_code'];?>" required style="margin-left:28px;" />
              </div>
              <div class="inputbx">
                <span class="span">Instructor Name</span>
                <input type="text" name="name" value="<?php echo $arrdata['teacher_name'];?>" required />
              </div>
              <div class="inputbx">
                <span class="span">Days</span>
                <input type="text" name="days" value="<?php echo $arrdata['day'];?>" required style="margin-left:89px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Room No</span>
                <input type="text" name="room" value="<?php echo $arrdata['room_no'];?>" required style="margin-left:54px;"/>
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
