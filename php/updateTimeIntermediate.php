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
<h1>Time Scheduling</h1>
<div class="center-div">
<div class="table-responsive">
<table>
<thead>
<tr>
<th>Timing</th>
<th>Friday Timing</th>
<th>Class</th>
<th>Subject Name</th>
<th>Part</th>
<th>Teacher Name</th>
<th>Room no</th>
<th colspan="2">Operation</th>
</tr>
</thead>
<tbody>
<?Php
include 'connection.php';
$s="select ids,subject_name,class ,subject_name,part,starting_time ,ending_time ,fri_starting_time,fri_ending_time ,room_no , teacher_name from timetable_intermediate t1 INNER JOIN intermediate_subject t2 on t1.subject_id=t2.subject_id INNER JOIN timetable t3 on t1.id=t3.id";
$query=mysqli_query($con,$s);
$nums=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $res['starting_time'].'-'.$res['starting_time'];  ?></td>
<td><?php echo $res['fri_starting_time'].'-'.$res['fri_ending_time']; ?></td> 
<td><?php echo $res['class'];?></td> 
<td><?php echo $res['subject_name'];?></td> 
<td><?php echo $res['part'];?></td> 
<td><?php echo $res['teacher_name'];?></td> 
<td><?php echo $res['room_no'];?></td> 

<td><a href="updateIntermediateT.php?id='<?php echo $res['ids'];?>'" data-toggle="tooltip" data-placement="bottom" title="Update"><i class='fa fa-edit fa-2x' style='color:#469408'></i></a></td>
<td><a href="deleteIntermediateT.php?id='<?php echo $res['ids'];?>'" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class='fa fa-trash-o fa-2x' style='color:#d13333'></i></a></td>
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