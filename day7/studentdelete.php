<?php
$connection = mysqli_connect("localhost", "root", "", "db_student");
$id=$_GET['deleteid'];
$q=mysqli_query($connection,"delete from tbl_student where student_id='{$id}'")or
die(mysqli_error($connection));
if($q)
{
  echo"<script>alert('Record Deleted');window.location='4-table.php';</script>";
  }
  ?>
