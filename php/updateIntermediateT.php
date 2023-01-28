<!DOCTYPE html>
<html>
  <head>
    <title>Update  Detail</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png" />
    <link type="text/css" rel="stylesheet" href="update.css" />
  </head>
  <body>
    <!-- section of the page-->
    <section>
      <!--section 1-->
      <div class="section2">
        <a href='updateTimeIntermediate.php'>check form</a>
        <h2 class="heading">Intermediate Timetable</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['id'];
$showquery="select * from `timetable_intermediate` where ids=$idupdate";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);
if(isset($_POST['submit'])){
//varaible for fetch data
$idupdate=$_GET['id'];
//varaible
$id=$_POST['id'];
$class=$_POST['class'];
$subjectid=$_POST['subjectid'];
$part=$_POST['part'];
$name=$_POST['name']; 
$room_no=$_POST['room_no'];


$query="UPDATE `timetable_intermediate` SET `id`='$id',`class`='$class',`subject_id`='$subjectid',`part`='$part',`teacher_name`='$name',`room_no`='$room_no' WHERE ids=$idupdate";
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
                <span class="span"> Time ID</span>
                <input type="text" name="id" value="<?php echo $arrdata['id']?>" required style="margin-left:45px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Class</span>
                <input type="text" name="class" value="<?php echo $arrdata['class'];?>" placeholder="Bs" required style="margin-left:4.1em;" />
              </div>
              <div class="inputbx">
                <span class="span">Subject Id</span>
                <input type="text" name="subjectid" value="<?php echo $arrdata['subject_id'];?>" required style="margin-left:27px;" />
              </div>
              <div class="inputbx">
                <span class="span">Part</span>
                <input type="text"  name="part" value="<?php echo $arrdata['part'];?>" required style="margin-left:4.6em;"/>
              </div>
              <div class="inputbx">
                <span class="span">Teacher Name</span>
                <input type="text"  name="name" value="<?php echo $arrdata['teacher_name'];?>" required/>
              </div>
              <div class="inputbx">
                <span class="span">Room No</span>
                <input type="text"  name="room_no" value="<?php echo $arrdata['room_no'];?>" required style="margin-left:39px;"/>
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
