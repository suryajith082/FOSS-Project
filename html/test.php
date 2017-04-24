<?php

	echo $_REQUEST['test']."\n";	//value of test parameter in the url of this page
	$sql_object=mysqli_connect("localhost","root","acer","FOSS");	//the variable is the mysql object that has been connected to your database
	$query="SELECT * FROM TEST";
	$result=mysqli_query($sql_object,$query);	//this statement will store the result of our query to $result variable
	while($row=mysqli_fetch_assoc($result)){
		foreach($row as $key=>$value){
			echo "attribute = $key, value = $value";
		}
	}

?>
