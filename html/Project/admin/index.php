<?php
session_start();
if(isset($_SESSION['admin']))
{
	header("location:admin/");
}?>
<html>
<head>
<script>
function addSalary()
{
	var bp=0,sa=0,ag=0,da=0,hra=0,gs=0;
	 bp=document.getElementsByName('bp')[0].value;
	 sa=document.getElementsByName('sa')[0].value;
	 ag=document.getElementsByName('ag')[0].value;
	 da=document.getElementsByName('da')[0].value;
	 hra=document.getElementsByName('hra')[0].value;
	 gs=Number(bp)+Number(sa)+Number(ag)+Number(da)+Number(hra);
	document.getElementsByName('gs')[0].value=gs;
	
	var cpf=document.getElementsByName('cpf')[0].value;
	var rcpf=document.getElementsByName('rcpf')[0].value;
	var lic=document.getElementsByName('lic')[0].value;
	var gpais=document.getElementsByName('gpais')[0].value;
	var oc=document.getElementsByName('oc')[0].value;
	var it=document.getElementsByName('it')[0].value;
	var far=document.getElementsByName('far')[0].value;
	var total=Number(cpf)+Number(rcpf)+Number(lic)+Number(gpais)+Number(oc)+Number(far)+Number(it);
	document.getElementsByName('total')[0].value=total;
	var netpay=Number(gs)-Number(total);
	
	if(netpay<0)
	{
		
		netpay=0;
		document.getElementById('btn').style.visibility='hidden';
		document.getElementsByName('netpay')[0].value=netpay;
	}
	else
	{
		document.getElementById('btn').style.visibility='visible';
	document.getElementsByName('netpay')[0].value=netpay;
	}
}
</script>
</head>
<body onclick="addSalary()">
<form action="../action/bill.php" method="post">
<table>
<tr>
<td>
Name:
</td>

<td>
<input type="text" name="name" required >
</td>

<td>
CPF:
</td>
<td>
<input type="number" min="0" name="cpf" >
</td>

</tr>
<tr>
<td>
Designation:
</td>


<td>
<input type="text" name="desg" required>
</td>
<td>
Recovery of CPF Loan:
</td>
<td>
<input type="number"min="0" name="rcpf" >
</td>

</tr>
<tr>
<td>
Basic Pay:
</td>
<td>
<input type="number" min="0"  name="bp" required>
</td>
<td>
LIC Premium:
</td>
<td>
<input type="number"min="0" name="lic" >
</td>

</tr>
<tr>
<td>
Special allowance:
</td>
<td>
<input type="number"  min="0" name="sa" >
</td>
<td>
GPAIS/professional Tax:
</td>
<td>
<input type="number"min="0" name="gpais" >
</td>

</tr>
<tr>
<td>
Academic Grade Pay:
</td>
<td>
<input type="number"  min="0" name="ag" >
</td>
<td>
Co.Operative recovery:
</td>
<td>
<input type="number" min="0" name="oc" >
</td>

</tr>
<tr>
<td>
Dearness Allowance:
</td>
<td>
<input type="number"  min="0" name="da" >
</td>
<td>
Incame TAx:
</td>
<td>
<input type="number" min="0" name="it" >
</td>

</tr>
<tr>
<td>
HRA:
</td>
<td>
<input type="number"  min="0" name="hra" >
</td>
<td>
Festival Advance Recovery:
</td>
<td>
<input type="number" min="0" name="far" >
</td>

</tr>
<tr>
<td>
Gross Salary:
</td>
<td>
<input type="number"min="0" name="gs" readonly >
</td>
<td>
Total Deductions:
</td>
<td>
<input type="number" min="0" name="total" readonly>
</td>

</tr>
<tr>
<td>
Net Pay:
</td>
<td>
<input type="number" min="0" name="netpay" readonly>
</td>
<td>
Bank Account No:
</td>
<td>
<input type="number" min="0" name="bankno" >
</td>

</tr>
<tr>
<td>
Gratuity Contribution:
</td>
<td>
<input type="number" min="0" name="gc" >
</td>

</tr>
<tr>
<td></td>
<td>
<input type="button" onclick="rest()" value="Reset">

</td>
<td></td>
<td>
<input type="submit" id="btn" value="Save">
</td>
</tr>
</table>
</form>
</body>