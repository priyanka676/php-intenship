<?php
$connection = mysqli_connect("localhost", "root", "", "student_potal");
$id=$_GET['deleteid'];
$q=mysqli_query($connection,"delete from tbl_potal where stu_id='{$id}'")or
die(mysqli_error($connection));
if($q)
{
  echo"<script>alert('Record Deleted');window.location='5-table.php';</script>";
  }
  ?>
