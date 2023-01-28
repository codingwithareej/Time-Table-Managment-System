<!DOCTYPE html>
<html>
  <head>
    <title>Update Time Detail</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png" />
    <link type="text/css" rel="stylesheet" href="update.css" />
  </head>
  <body>
    <!-- section of the page-->
    <section>
      <!--section 1-->
      <div class="section2">
        <a href='updateTimeSchedule.php'>check form</a>
        <h2 class="heading">Time</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['id'];
$showquery="select * from `timetable` where id=$idupdate";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
//varaible for fetch data
$idupdate=$_GET['id'];
//varaible
$id=$_POST['id'];
$start=$_POST['start'];
$end=$_POST['end'];
$fri_start=$_POST['fri_start'];
$fri_end=$_POST['fri_end'];
$query="UPDATE `timetable` SET `id`='$id',`starting_time`='$start',`ending_time`='$end',`fri_starting_time`='$fri_start',`fri_ending_time`='$fri_end' WHERE id=$idupdate";
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
                <input type="text" name="id" value="<?php echo $arrdata['id']?>" required style="margin-left:6.9em;"/>
              </div>
              <div class="inputbx">
                <span class="span">Starting Time</span>
                <input type="text" name="start" value="<?php echo $arrdata['starting_time'];?>" placeholder="Bs" required style="margin-left:25px;" />
              </div>
              <div class="inputbx">
                <span class="span">Ending Time</span>
                <input type="text" name="end" value="<?php echo $arrdata['ending_time'];?>" required style="margin-left:33px;" />
              </div>
              <div class="inputbx">
                <span class="span">Fri Starting Time</span>
                <input type="text"  name="fri_start" value="<?php echo $arrdata['fri_starting_time'];?>" required />
              </div>
              <div class="inputbx">
                <span class="span">Fri Ending Time</span>
                <input type="text"  name="fri_end" value="<?php echo $arrdata['fri_ending_time'];?>" required style="margin-left:8px;"/>
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
