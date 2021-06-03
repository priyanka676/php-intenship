<?php
$connection = mysqli_connect("localhost", "root", "" , "student_potal");
if(!isset($_GET['id']) || empty ($_GET['id'])){
header("location:5-table.php");
}
$editid=$_GET['id'];
$editq=mysqli_query($connection,"select * from tbl_potal  where stu_id='{$editid}'")or die(mysqli_error($connection));
$editdata=mysqli_fetch_array($editq);
if($_POST){
     $txt1= $_POST['txt1'];
     $txt2 = $_POST['txt2'];
      $txt3 = $_POST['txt3'];
      $email=$_POST['email'];
	  $txt4=$_POST['txt4'];
	  $address=$_POST['address'];
	  $txt5=$_POST['txt5'];
	  $txt6=$_POST['txt6'];
	  $txt7=$_POST['txt7'];
	  $txt8=$_POST['txt8']; 
	 $uq=mysqli_query($connection,"update tbl_potal set stu_name='{$txt1}',stu_gender='{$txt2}',stu_dob='{$txt3}',stu_email='{$email}',stu_mobile='{$txt4}',stu_address='{$address}',stu_pass='{$txt5}',stu_pincode='{$txt6}',stu_area='{$txt7}',stu_bloodgroup='{$txt8}' where stu_id='{$editid}'")or die(mysqli_error($connection));
	
	 if($uq){
	     echo"<script>alert('Record updated'); window.location='5-table.php';</script>";
		 }
		 }
		 ?>
		    <html>
    <head>
	<title>REGISTRATION FORM</title></head>
    <body>
	    <form method="post">
		<table border="1" align="center" width="400" bgcolor="#CCCCCC" >
		<u><caption><b>Student Registration Form</b></caption> </u>
<br/>
        <tr>
		<th>Student Name </th>
		<td><input type ="text" value="<?php echo $editdata['stu_name'];?>"name = "txt1" /></td></tr>
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
<td><input type="date" value="<?php echo $editdata['stu_dob'];?>" name="txt3"/></td>
</tr>
<br/>
<tr>
<th>Enter  email</th>
<td><input type="email" value="<?php echo $editdata['stu_email'];?>" name="email" /></td>
</tr>
			   
        <br/>
		<tr>
		<th>Student Mobile</th>
		<td><input type ="number" value="<?php echo $editdata['stu_mobile'];?>"name = "txt4" /></td>
		</tr>
		<br/>
		<tr>
		<th>Enter  address</th>
<td><textarea name="address"rows="8" cols="20" value="<?php echo $editdata['stu_address'];?>"></textarea></td>
</tr>
		
		<br/>
		<tr>
		<th>Enter  password</th>
<td><input type="password" value="<?php echo $editdata['stu_pass'];?>"name="txt5"/></td>
</tr>

<br/>
<tr>
<th>pincode</th>
<td><input type="pincode" value="<?php echo $editdata['stu_pincode'];?>"name="txt6"/></td>
</tr>
<br/>
<tr>
<th>Area</th>
<td><input type="text"value="<?php echo $editdata['stu_area'];?>" name="txt7"/></td>
</tr>
<br/>
<tr>
<th>Student Bloodgroup</th>
 <td><select name="txt8"value="<?php echo $editdata['stu_bloodgroup'];?>">
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