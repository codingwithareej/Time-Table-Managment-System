<!DOCTYPE html>
<html>
 <head>
     <title>BS timetable</title>
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
<h1>Timetable</h1>
<div class="center-div">
<div class="table-responsive">
<table>
<thead>
<tr>
<th>id</th>
<th>Timing</th>
<th>FRi Timing</th>
<th>Department name</th>
<th>Semester</th>
<th>Course Code</th>
<th>Teacher Name</th>
<th>Day</th>
<th>Room</th>
<th colspan="2">Operation</th>
</tr>
</thead>
<tbody>
<?Php
include 'connection.php';
$s="select `s_id`,starting_time ,ending_time ,fri_starting_time,fri_ending_time,`department_name`,`semester`,`Course_code`, `teacher_name`,`day`,`room_no` FROM `timetable_bs` t1 INNER JOIN timetable t2 on t1.id=t2.id
ORDER BY t1.id";
$query=mysqli_query($con,$s);
$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $res['s_id'];  ?></td> 
<td><?php echo $res['starting_time'].'-'. $res['ending_time'];?></td>
<td><?php echo $res['fri_starting_time'].'-'. $res['fri_ending_time']; ?></td>
<td><?php echo $res['department_name'];  ?></td>
<td><?php echo $res['semester'];  ?></td>
<td><?php echo $res['Course_code'];  ?></td>
<td><?php echo $res['teacher_name'];  ?></td>
<td><?php echo $res['day'];  ?></td>
<td><?php echo $res['room_no'];  ?></td>
<td><a href="updatebs.php?id='<?php echo $res['s_id'];?>'" data-toggle="tooltip" data-placement="bottom" title="Update"><i class='fa fa-edit fa-2x' style='color:#469408'></i></a></td>
<td><a href="deletebs.php?id='<?php echo $res['s_id'];?>'" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class='fa fa-trash-o fa-2x' style='color:#d13333'></i></a></td>
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