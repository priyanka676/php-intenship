<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "student_potal";
//Connection function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection,
        "insert into tbl_potal(stu_name,stu_gender,stu_dob,stu_email,stu_mobile,stu_address,stu_pass,stu_pincode,stu_area,stu_bloodgroup)
		values('Priyanka','female','2001-02-11','abc@gamail.com','7856473546','sabarmati ahmedabad','3456','380019','dcabin','o+')")
        or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added!!');</script>";
}

?>
   
   