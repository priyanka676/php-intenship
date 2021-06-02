<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_student";
//Connection function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection,
        "insert into tbl_student(student_name,student_gender,student_dob,student_email,student_mobile,student_address,student_pass,student_pincode,student_area,student_bloodgroup)
		values('Priyanka','female','2001-02-11','abc@gamail.com','7856473546','sabarmati ahmedabad','3456','380019','dcabin','o+')")
        or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added!!');</script>";
}

?>
   