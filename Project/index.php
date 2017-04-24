<?php
include("db/db.php");
session_start();
if(isset($_SESSION['admin']))
{
	header("location:admin/");
}
else{
	header("location:login/");
}

?>