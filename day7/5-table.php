<?php
$connection = mysqli_connect("localhost", "root", "", "student_potal");
$q=mysqli_query($connection,"select * from tbl_potal ")or
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
	echo"<td>{$row['stu_name']}</td>";
	echo"<td>{$row['stu_gender']}</td>";
	echo"<td>{$row['stu_dob']}</td>";
	echo"<td>{$row['stu_email']}</td>";
	echo"<td>{$row['stu_mobile']}</td>";
	echo"<td>{$row['stu_address']}</td>";
	echo"<td>{$row['stu_pass']}</td>";
	echo"<td>{$row['stu_pincode']}</td>";
	echo"<td>{$row['stu_area']}</td>";
	echo"<td>{$row['stu_bloodgroup']}</td>";
	echo"<td><a href='studelete.php?deleteid={$row['stu_id']}'>Delete</a></td>";
	echo"</tr>";
}
echo"</table>";
echo"<a href='studentpotal.html'>Add Record</a>";
?>
	