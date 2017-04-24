<?php 
include("../db/db.php");
$username=$_POST['username'];
$pwd=$_POST['password'];

$query="select * from login where `username`='".$username."' and  `password`='".$pwd."'";
$r=mysqli_query($con,$query);


if(mysqli_num_rows($r)>0)
{
	header("location:../admin/");
}
else
{
	echo "<script>alert('Wrong inputs');window.location='../login/'</script>";
}
?>