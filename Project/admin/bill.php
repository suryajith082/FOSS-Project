<?php 
session_start();
if(isset($_SESSION['admin']))
{
	header("location:admin/");
}
include("../db/db.php");
$query="SELECT * FROM bill order by id desc limit 1";
$r=mysqli_query($con,$query);
$res=mysqli_fetch_assoc($r);

?>
<html>
<head>
<title>
Payment of  <?php echo $res['name']; ?>
</title>
<style>
#emp{
width:100%;
}
#emp1{
width:50%;float:right;
}
#emp2{
width:50%;
float:left;
}
#underlineDiv{
border-top:1px solid black;
border-bottom:1px solid black;
width:100%;
float:left;
}
#nounderlineDiv{

width:100%;
float:left;
}
</style>
</head>
<body>
<div id="main">
			<div id="head" >
				<p onclick="window.print();">PRINT</p>
				<div id="image" align ="center" >
						<div>	
				
					<h2 ><img src="IEEE SB CECTL 20170419_121157.jpg" width="10%" height="10%" /> COLLEGE OF ENGINEERING CHERTHALA <br/></h2>
					</div>
					<div>
				<b>(Managed by IHRD,Govt of Kerala )</b><br>Pallipuram Post, Cherthala, Alappuzha District,Kerala,688541
					<br><b>Statment of Salary drawn for the month <?php echo date('M'); ?> of 2017</b>
					</div>
				</div>
			</div>
		<div id="emp">
				<div id="emp2" >
						<p>
						Name of the Employee: <b><?php echo $res['name']; ?></b>
						</p>
						<p>
						Designation:<?php echo $res['designation']; ?>
						</p>
						
				</div>
				<div id="emp1" >
					<p>EMP id:1000<?php echo $res['id']; ?>
					</p>
				</div>
		</div>
		<div id="underlineDiv">
			<div style="margin-left:25%"><b>Pay</b>
			<div style="margin-right:25%;float:right"><b>Deductions</b></div>

			</div>			
		</div>
		<div id="nounderlineDiv">
			<div >Basic Pay : <?php echo $res['bp']; ?>
				<div style="margin-left:45%;">CPF : <?php echo $res['cpf']; ?></div>
			</div>
			<div >Special Allowance : <?php echo $res['sa']; ?>
				<div style="margin-left:45%;">Recovery of CPF Loan :<?php echo $res['rcpf']; ?></div>
			</div>
			<div >Academic Grade Pay :<?php echo $res['ag']; ?>
				<div style="margin-left:45%;">LIC Premium : <?php echo $res['lic']; ?></div>
			</div>
			<div >Dearness Allowance : <?php echo $res['da']; ?>
				<div style="margin-left:45%;">GPAIS/Professional Tax : <?php echo $res['gpais']; ?></div>
			</div>
			<div >HRA : <?php echo $res['hra']; ?>
				<div style="margin-left:45%;">Co.Operative recovery : <?php echo $res['oc']; ?></div>
			</div>
			<div >
				<div style="margin-left:45%;">Incame Tax : <?php echo $res['it']; ?></div>
			</div>
			<div >
				<div style="margin-left:45%;"><br>festival Advance recovery : <?php echo $res['far']; ?></div>
			</div>
			<div ><b>Gross Salary : <?php echo $res['gc']; ?></b>
				<div style="margin-left:45%;"><b>Total Deductions :<?php echo $res['totaldeduction']; ?></b></div>
			</div>
		</div>
		<div id="underlineDiv">
			<div ><b>Net Pay : <?php echo $res['netpay']; ?></b>
			</div>			
		</div>
		<div id="nounderlineDiv">
			<div >Bank Account No: <?php echo $res['accno']; ?>
				
			</div>
			<div id="nounderlineDiv">
			<div ><b>Gratuity Contribution : <?php echo $res['gc']; ?>
				
			</div>
			<div style="margin-left:65%;">Account Officer/Principal</div>
			</div>
	</div>	
		
</div>

</body>
</html>