<!DOCTYPE html>
<html>
  <head>
    <title>Update Detail</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png" />
    <link type="text/css" rel="stylesheet" href="update.css" />
  </head>
  <body>
    <!-- section of the page-->
    <section>
      <!--section 1-->
      <div class="section2">
        <a href='updateThdetail.php'>check form</a>
        <h2 class="heading">Department</h2>
        <div class="box">
          <div class="form">
            <form action="" method="POST">
            <?php
include 'connection.php';
$idupdate=$_GET['ids'];
$showquery="select * FROM `teacher_ttms` where id=$idupdate  ORDER BY `department_name`";
$showdata=mysqli_query($con,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){
//varaible for fetch data
$idupdate=$_GET['ids'];
//varaible
$Name=$_POST['name'];
$departmentname=$_POST['deptname'];
$query="UPDATE `teacher_ttms` SET `teacher_name`='$Name',`department_name`='$departmentname' WHERE  `id`=$idupdate";
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
                <span class="span">Teacher Name</span>
                <input type="text" name="name" value="<?php echo $arrdata['teacher_name']?>" required/>
              </div>
              <div class="inputbx">
                <span class="span">Dept-name</span>
                <input type="text" name="deptname" value="<?php echo $arrdata['department_name'];?>" placeholder="Bs" required style="margin-left:25px;" />
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
