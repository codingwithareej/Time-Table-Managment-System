<!DOCTYPE html>
<html>
  <head>
    <title>Update Subject Detail</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png" />
    <link type="text/css" rel="stylesheet" href="update.css" />
  </head>
  <body>
    <!-- section of the page-->
    <section>
      <!--section 1-->
      <div class="section2">
        <a href='updateSubjectDetail.php'>check form</a>
        <h2 class="heading">Intermediate Subject</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['id'];
$showquery="select * from intermediate_subject where id=$idupdate";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
//varaible for fetch data
$idupdate=$_GET['id'];
//varaible

$subjectid=$_POST['subjectid'];
$subjectName=$_POST['subjectname'];
$query="UPDATE `intermediate_subject` SET `subject_id`='$subjectid',`subject_name`='$subjectName' WHERE `id`=$idupdate";
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
                <span class="span">Subject ID</span>
                <input type="text" name="subjectid" value="<?php echo $arrdata['subject_id']?>" required style="margin-left:35px;"/>
              </div>
              <div class="inputbx">
                <span class="span">Subject Name</span>
                <input type="text" name="subjectname" value="<?php echo $arrdata['subject_name'];?>" placeholder="Bs" required style="margin-left:11px;" />
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
