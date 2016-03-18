<?php 
include("connection.php");
include("mainAuth.php");
 echo "<h1> Welcome " .ucfirst($user)."</h1>";
               $row = mysql_fetch_array($result);

               $branch = $row['Branch_name'];
               echo "<h2> Admin Branch : ".ucfirst($branch);
                require("selectFromEmployee.php");
						
 ?>