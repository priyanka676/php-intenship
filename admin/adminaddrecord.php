<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_admin";
//Connection function
$connection = mysqli_connect($host, $username, $passwd, $dbname);

$q = mysqli_query($connection,
        "insert into tbl_admin(first_name,last_name,email,gender,pass)
		values('Priyanka','rana','abc@gamail.com','female','3456')")
        or die("Error". mysqli_error($connection));

if($q)
{
    echo "<script>alert('Record Added!!');</script>";
}
?>
   
   