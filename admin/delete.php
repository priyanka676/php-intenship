<?php
$connection = mysqli_connect("localhost", "root", "", "db_admin");
$id=$_GET['deleteid'];
$q=mysqli_query($connection,"delete from tbl_admin where id='{$id}'")or
die(mysqli_error($connection));
if($q)
{
  echo"<script>alert('Record Deleted');window.location='table.php';</script>";
  }
  ?>
