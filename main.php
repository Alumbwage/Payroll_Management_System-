<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

     <?php 
           $user = $_POST["username"];
           $pass = $_POST["password"];

           if($user == "gaurav" && $pass == "gaurav@ace" || $user == "sagar" && $pass == "sagar@ace" || $user == "harsh" && $pass == "harsh@ace" ){?>
           	 <h1> <?php echo " Welcome $user"; ?>  </h1>;
           <?php }else{ echo "Invalid User!!!";} ?>
      
</body>
</html>