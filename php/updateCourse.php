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
        <a href='updateCourseDetail.php'>check form</a>
        <h2 class="heading">BS Course</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['id'];
$showquery="select * from course_bs where id=$idupdate";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
//varaible for fetch data
$idupdate=$_GET['id'];
//varaible

$Courseid=$_POST['Courseid'];
$CourseName=$_POST['Coursename'];
$CourseCode=$_POST['Coursecode'];
$depBs=$_POST['bs'];
$depSem=$_POST['sem'];
$query="UPDATE `course_bs` SET course_id='$Courseid',Course_name='$CourseName',Course_code='$CourseCode',department_name='$depBs',semester='$depSem' where id=$idupdate";
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
                <span class="span">Course ID</span>
                <input type="text" name="Courseid" value="<?php echo $arrdata['course_id']?>" required style="margin-left:35px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Course Name</span>
                <input type="text" name="Coursename" value="<?php echo $arrdata['Course_name'];?>" placeholder="Bs" required style="margin-left:11px;" />
              </div>
              <div class="inputbx">
                <span class="span">Course Code</span>
                <input type="text" name="Coursecode" value="<?php echo $arrdata['Course_code'];?>" required style="margin-left:15px;" />
              </div>
              <div class="inputbx">
                <span class="span">Department</span>
                <input type="text"  name="bs" value="<?php echo $arrdata['department_name'];?>" required style="margin-left:21px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Semester</span>
                <input type="text"  name="sem" value="<?php echo $arrdata['semester'];?>" required style="margin-left:45px;"/>
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
