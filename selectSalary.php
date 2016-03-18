
<?php 
echo $user;
$sql_statement  = " SELECT * FROM salary";


$result = mysql_query($sql_statement);

$outputDisplay =  " ";
$myrowcount = 0;

if(!$result){
	
	$outputDisplay .= "<br><font color=red>MYSQL No: ".mysql_errno();
	$outputDisplay .= "<br>MYSQL Error: ".mysql_error();
	$outputDisplay .= "<br>SQL Statement: ".$sql_statement;
	$outputDisplay .= "<br>MySQL Affected Rows: ".mysql_affected_rows()."</font><br>";
}else{
	
	$outputDisplay .= "<h3>Attendance Details : </h3>";
    
	$outputDisplay .='<center><table border=1 style="color:black;">';
	$outputDisplay .='<tr><th>Emp_id</th><th>Basic_sal</th><th>Allowance</th><th>DRA</th><th>Advance</th></tr>';

	$numresults = mysql_num_rows($result);

	for ($i = 0; $i < $numresults ; $i++)
	{
		if(!($i%2)==0)
		{
			$outputDisplay .="<tr style=\"background-color: #f5deb3;\">";
		}else{
			$outputDisplay .="<tr style=\"background-color: white;\">";
		}

		$row = mysql_fetch_array($result);
       
		$emp_id = $row['Emp_id'];
		$basic = $row['Basic_sal'];
		$allowance= $row['Allowance'];
		$dra = $row['DRA'];
		$advance= $row['Advance'];
		
		

		$outputDisplay .="<td>".$emp_id."</td>";
		$outputDisplay .="<td>".$basic."</td>";
		$outputDisplay .="<td>".$allowance."</td>";
		$outputDisplay .="<td>".$dra."</td>";
		$outputDisplay .="<td>".$advance."</td>";
		
		$outputDisplay .= "</tr>";
		$myrowcount++;
	}	
	$outputDisplay .= "</table></center>";

	$outputDisplay .= "Number of Rows : ".$myrowcount;

	echo $outputDisplay;
}


 ?>