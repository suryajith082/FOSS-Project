<?php 
session_start();
if(isset($_SESSION['admin']))
{
	header("location:admin/");
}
include("../db/db.php");
$name=$_POST['name'];
$desg=$_POST['desg'];
$bp=$_POST['bp'];
$sa=$_POST['sa'];
$ag=$_POST['ag'];
$da=$_POST['da'];
$hra=$_POST['hra'];
$gs=$_POST['gs'];
$netpay=$_POST['netpay'];
$cpf=$_POST['cpf'];
$rcpf=$_POST['rcpf'];
$lic=$_POST['lic'];
$gpais=$_POST['gpais'];
$oc=$_POST['oc'];
$it=$_POST['it'];
$far=$_POST['far'];
$total=$_POST['total'];
$bankno=$_POST['bankno'];
$gc=$_POST['gc'];
$query="INSERT INTO `bill`(`name`, `designation`, `bp`, `sa`, `ag`, `da`, `hra`, `grosssalary`, `netpay`, `accno`, `gc`, `cpf`, `rcpf`, `lic`, `gpais`, `oc`, `it`, `far`, `totaldeduction`)
 VALUES('$name','$desg','$bp','$sa','$ag','$da','$hra','$gs','$netpay','$bankno','$gc','$cpf','$rcpf','$lic','$gpais','$oc','$it','$far','$total')";
$r=mysqli_query($con,$query);


header("location:../admin/bill.php");
?>