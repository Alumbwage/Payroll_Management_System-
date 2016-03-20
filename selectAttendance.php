
<?php 
if ($user == "admin"){
	$sql_statement  = "SELECT * FROM employee AS e INNER JOIN attendance AS a ON a.Emp_id = e.Emp_id";
}else{
$sql_statement  = "SELECT * FROM employee AS e INNER JOIN attendance AS a ON a.Emp_id = e.Emp_id WHERE e.Branch_name IN (SELECT Branch_name From admin WHERE username = '".$user."') ";
}

$result = mysqli_query($db,$sql_statement);

$outputDisplay =  " ";
$myrowcount = 0;

if(!$result){
	
	$outputDisplay .= "<br><font color=red>mysqli No: ".mysqli_errno($db);
	$outputDisplay .= "<br>mysqli Error: ".mysqli_error();
	$outputDisplay .= "<br>SQL Statement: ".$sql_statement;
	$outputDisplay .= "<br>mysqli Affected Rows: ".mysqli_affected_rows()."</font><br>";
}else{
	
	$outputDisplay .= "<h3>Attendance Details : </h3>";
    
	$outputDisplay .='<center><table border=1 style="color:black;">';
	$outputDisplay .='<tr><th>Emp_id</th><th>Emp_name</th><th>Dept</th><th>Desgn</th><th>Branch_name</th><th>Month</th><th>twd</th><th>wd</th><th>Leaves</th></tr>';

	$numresults = mysqli_num_rows($result);

	for ($i = 0; $i < $numresults ; $i++)
	{
		if(!($i%2)==0)
		{
			$outputDisplay .="<tr style=\"background-color: #f5deb3;\">";
		}else{
			$outputDisplay .="<tr style=\"background-color: white;\">";
		}

		$row = mysqli_fetch_array($result);

       
		$emp_id = $row['Emp_id'];
		$emp_name = $row['Emp_name'];
		$dept = $row['Dept_name'];
		$desgn = $row['Desgn'];
		$branch = $row['Branch_name'];
		$month = $row['Month_name'];
		$twd = $row['Total_Working_Days'];
		$wd = $row['Worked_Days'];
		$leaves= $row['Leaves'];
		
		

		$outputDisplay .="<td>".$emp_id."</td>";
		$outputDisplay .="<td>".$emp_name."</td>";
		$outputDisplay .="<td>".$dept."</td>";
		$outputDisplay .="<td>".$desgn."</td>";
		$outputDisplay .="<td>".$branch."</td>";
		$outputDisplay .="<td>".$month."</td>";
		$outputDisplay .="<td>".$twd."</td>";
		$outputDisplay .="<td>".$wd."</td>";
		$outputDisplay .="<td>".$leaves."</td>";
		
		$outputDisplay .= "</tr>";
		$myrowcount++;
	}	
	$outputDisplay .= "</table></center>";

	$outputDisplay .= "Number of Rows : ".$myrowcount;

	echo $outputDisplay;
}


 ?>