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
           	 <h1> <?php echo " Welcome " . ucfirst($user); ?>  </h1>
           <?php }
           else{ echo "<script> alert(\"Invalid Username OR Password!!!\");window.location.href='index.php'</script>"; 
       			}

        ?>
      
</body>
</html>