
<?php
include('form.php');
$connection = mysqli_connect("localhost", "root", "" , "db_admin");

if($_POST) {
    $login= $_POST['login'];
     $password = $_POST['pass'];

//Connection function
$q = mysqli_query($connection,
       "insert into tbl_login(login_id,password)values('{$login}','{$password}')")
         or die("Error". mysqli_error($connection));
if($q)
{
    echo "<script>alert('Login successfully!!');</script>";
}
}
?>
	