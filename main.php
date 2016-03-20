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
       	<?php $sql_statement  = " SELECT username ,Branch_name FROM admin WHERE username = '".$user."' AND password = '".$pass."' ";
       			$result = mysqli_query($sql_statement);
       			if(!$result){
	
					$outputDisplay .= "<br><font color=red>mysqli No: ".mysqli_errno();
					$outputDisplay .= "<br>mysqli Error: ".mysqli_error();
					$outputDisplay .= "<br>SQL Statement: ".$sql_statement;
					$outputDisplay .= "<br>mysqli Affected Rows: ".mysqli_affected_rows()."</font><br>";
				}else{
					$numresults = mysqli_num_rows($result);

					if($numresults == 0){
						 echo "<script> alert(\"Invalid Username OR Password!!!\");window.location.href='index.php'</script>"; 
						}else{

							 echo "<h1> Welcome " .ucfirst($user)."</h1>";
               $row = mysqli_fetch_array($result);

               $branch = $row['Branch_name'];
               echo "<h2> Admin Branch : ".ucfirst($branch);
                require("selectFromEmployee.php");
						}
					}
       	?>
  <form action="index.php">
    <input type="submit" value="Log Out"></input>
  </form>     
 
      
        

      
</body>
</html>