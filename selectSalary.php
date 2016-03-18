
<?php 

$sql_statement  = "SELECT * FROM employee AS e INNER JOIN salary AS s ON e.Emp_id = s.Emp_id WHERE e.Branch_name IN (SELECT Branch_name From admin WHERE username = '".$user."') ";


$result = mysql_query($sql_statement);

$outputDisplay =  " ";
$myrowcount = 0;

if(!$result){
	
	$outputDisplay .= "<br><font color=red>MYSQL No: ".mysql_errno();
	$outputDisplay .= "<br>MYSQL Error: ".mysql_error();
	$outputDisplay .= "<br>SQL Statement: ".$sql_statement;
	$outputDisplay .= "<br>MySQL Affected Rows: ".mysql_affected_rows()."</font><br>";
}else{
	
	$outputDisplay .= "<h3>Salary Details : </h3>";
    
	$outputDisplay .='<center><table border=1 style="color:black;">';
	$outputDisplay .='<tr><th>Emp_id</th><th>Emp_name</th><th>Dept</th><th>Desgn</th><th>Branch_name</th><th>Basic_sal</th><th>Allowance</th><th>DRA</th><th>Advance</th></tr>';

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
		$emp_name = $row['Emp_name'];
		$dept = $row['Dept_name'];
		$desgn = $row['Desgn'];
		$branch = $row['Branch_name'];
		$basic = $row['Basic_sal'];
		$allowance= $row['Allowance'];
		$dra = $row['DRA'];
		$advance= $row['Advance'];
		
		

		$outputDisplay .="<td>".$emp_id."</td>";
		$outputDisplay .="<td>".$emp_name."</td>";
		$outputDisplay .="<td>".$dept."</td>";
		$outputDisplay .="<td>".$desgn."</td>";
		$outputDisplay .="<td>".$branch."</td>";
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