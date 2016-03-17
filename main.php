<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

     <?php 
     		if(isset($_POST['username'])){
     			$user = $_POST["username"];
     		}else{
     			$user = '';
     		}
           
           if(isset($_POST['password'])){
     			 $pass = $_POST["password"];
     		}else{
     			$pass = '';
     		} ?>
          
       <?php require("connection.php") ?>   
       	<?php $sql_statement  = " SELECT username FROM admin WHERE username = '".$user."' AND password = '".$pass."' ";
       			$result = mysql_query($sql_statement);
       			if(!$result){
	
					$outputDisplay .= "<br><font color=red>MYSQL No: ".mysql_errno();
					$outputDisplay .= "<br>MYSQL Error: ".mysql_error();
					$outputDisplay .= "<br>SQL Statement: ".$sql_statement;
					$outputDisplay .= "<br>MySQL Affected Rows: ".mysql_affected_rows()."</font><br>";
				}else{
					$numresults = mysql_num_rows($result);

					if($numresults == 0){
						 echo "<script> alert(\"Invalid Username OR Password!!!\");window.location.href='index.php'</script>"; 
						}else{
							 echo "<h1> Welcome " .ucfirst($user)."</h1>";
						}
					}
       	?>
       
 
      
        <?php require("selectFromEmployee.php");?>

      
</body>
</html>