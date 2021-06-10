<?php
include('table.php');
$connection = mysqli_connect("localhost", "root", "", "db_admin");
$q=mysqli_query($connection,"select * from tbl_admin ")or
die(mysqli_error($connection));
echo"<table border='1'>";
echo"<tr>";
echo"<th>ID</th>";
echo"<th>First Name</th>";
echo"<th>Last Name</th>";
echo"<th>email</th>";
echo"<th>gender</th>";
echo"<th>password</th>";

echo"</tr>";
$i=0;
while($row=mysqli_fetch_array($q)){
	$i++;
	echo"<tr>";
	echo"<td>$i</td>";
	echo"<td>{$row['first_name']}</td>";
	echo"<td>{$row['last_name']}</td>";
	echo"<td>{$row['email']}</td>";
	echo"<td>{$row['gender']}</td>";
      echo"<td>{$row['password']}</td>";
	echo"<td><a href='delete.php?deleteid={$row['id']}'>Delete</a></td>";
	echo"<td><a href='edit.php?id={$row['id']}'>Edit</a></td>";
	echo"</tr>";
}
echo"</table>";
echo"<a href='registration.php'>Add Record</a>";
?>
	