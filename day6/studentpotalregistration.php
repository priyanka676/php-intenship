<?php
$connection = mysqli_connect("localhost", "root", "" , "student_potal");

if($_POST) {
    $name= $_POST['txt1'];
     $gender = $_POST['txt2'];
      $dob = $_POST['txt3'];
      $email=$_POST['email'];
	  $mobile=$_POST['txt4'];
	  $address=$_POST['address'];
	  $pass=$_POST['txt5'];
	  $pincode=$_POST['txt6'];
	  $area=$_POST['txt7'];
	  $bloodgroup=$_POST['txt8'];
      $q= mysqli_query($connection,
     "insert into tbl_potal(stu_name,stu_gender,stu_dob,stu_email,stu_mobile,stu_address,stu_pass,stu_pincode,stu_area,stu_bloodgroup)
	 values('{$name}','{$gender}','{$dob}','{$email}','{$mobile}','{$address}','{$pass}','{$pincode}','{$area}','{$bloodgroup}')")
        or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added');</script>";
}
          
}
?>

<html>
    <head>
	<title>REGISTRATION FORM</title></head>
    <body>
	    <form action="studentpotal.html"method="post">
		<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
		<u><caption><b>Student Registration Form</b></caption> </u>
<br/>
        <tr>
		<th>Student Name </th>
		<td><input type ="text" name = "txt1" /></td></tr>
		<tr>
        <br/><th>Student Gender </th>
		<td><select name="txt2">
                  <option>Male</option>
                  <option>Female</option>
                  <option>Other</option>
               </select></td>
			   </tr>
			 <br/>
			 <tr>
			 <th>  Date of birth</th>
<td><input type="date" name="txt3"/></td>
</tr>
<br/>
<tr>
<th>Enter  email</th>
<td><input type="email" name="email" /></td>
</tr>
			   
        <br/>
		<tr>
		<th>Student Mobile</th>
		<td><input type ="number" name = "txt4" /></td>
		</tr>
		<br/>
		<tr>
		<th>Enter  address</th>
<td><textarea name="address"rows="8" cols="20"></textarea></td>
</tr>
		
		<br/>
		<tr>
		<th>Enter  password</th>
<td><input type="password" name="txt5"/></td>
</tr>

<br/>
<tr>
<th>pincode</th>
<td><input type="pincode" name="txt6"/></td>
</tr>
<br/>
<tr>
<th>Area</th>
<td><input type="text" name="txt7"/></td>
</tr>
<br/>
<tr>
<th>Student Bloodgroup</th>
 <td><select name="txt8">
                  <option>A+</option>
                  <option>B+</option>
                  <option>O+</option>
				  <option>A-</option>
                  <option>B-</option>
                  <option>O-</option>
               </select></td>
			   </tr>
			   <td colspan="2" align="center">
        <input type="submit"/>
		</table>
  </form>
</body>
</html>