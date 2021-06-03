<?php
$connection = mysqli_connect("localhost", "root", "", "db_student");
$q=mysqli_query($connection,"select * from tbl_student ")or
die(mysqli_error($connection));
echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>dob</th>";
echo"<th>email</th>";
echo"<th>mobile</th>";
echo"<th>address</th>";
echo"<th>pass</th>";
echo"<th>pincode</th>";
echo"<th>area</th>";
echo"<th>bloodgroup</th>";
echo"</tr>";
$i=0;
while($row=mysqli_fetch_array($q)){
	$i++;
	echo"<tr>";
	echo"<td>$i</td>";
	echo"<td>{$row['student_name']}</td>";
	echo"<td>{$row['student_gender']}</td>";
	echo"<td>{$row['student_dob']}</td>";
	echo"<td>{$row['student_email']}</td>";
	echo"<td>{$row['student_mobile']}</td>";
	echo"<td>{$row['student_address']}</td>";
	echo"<td>{$row['student_pass']}</td>";
	echo"<td>{$row['student_pincode']}</td>";
	echo"<td>{$row['student_area']}</td>";
	echo"<td>{$row['student_bloodgroup']}</td>";
	echo"<td><a href='studentdelete.php?deleteid={$row['student_id']}'>Delete</a></td>";
	echo"</tr>";
}
echo"</table>";
echo"<a href='studentregistration.php'>Add Record</a>";
?>
	