<!DOCTYPE html>
<html>
 <head>
     <title>Detail</title>
     <link rel="shortcut icon" type="image/png" href="image/favicon.png" />
    <!--Bootstrap-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />
     <!--Font Awesome-->
     <link
      rel="stylesheet"
      href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css"
    />
     <!--external Css Link-->
     <link type="text/css" rel="stylesheet" href="styletable.css" />
</head>
<body>
<div class="main-div">
<h1>Detail of Course</h1>
<div class="center-div">
<div class="table-responsive">
<table>
<thead>
<tr>
<th>Course Id</th>
<th>Course Name</th>
<th>Course Code</th>
<th>Department</th>
<th>Semester</th>
<th colspan="2">Operation</th>
</tr>
</thead>
<tbody>
<?Php
include 'connection.php';
$s="select * from course_bs";
$query=mysqli_query($con,$s);
$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $res['course_id'];  ?></td>
<td><?php echo $res['Course_name'];  ?></td> 
<td><?php echo $res['Course_code']?></td>
<td><?php echo $res['department_name'] ?></td>
<td><?php echo $res['semester'];  ?></td>
<td><a href="updateCourse.php?id='<?php echo $res['id'];?>'" data-toggle="tooltip" data-placement="bottom" title="Update"><i class='fa fa-edit fa-2x' style='color:#469408'></i></a></td>
<td><a href="deleteCourse.php?id='<?php echo $res['id'];?>'" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class='fa fa-trash-o fa-2x' style='color:#d13333'></i></a></td>
</tr>
<?php
}
?>

</tbody>
</table>


</div>
</div>
</div>
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>
</body>
</html>