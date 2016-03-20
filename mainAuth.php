<!DOCTYPE html>
<html>
<head>
	<title>Main Page</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
  <button id="showEmp">Employee Table</button>
  <button id="showAtt">Attendance Table</button>
  <button id="showSal">Salary Table</button>

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
        } 
      ?>

      <?php require("connection.php") ?>  
      <div id="empTable" style="display:none">
        

      <?php $sql_statement  = " SELECT username ,Branch_name FROM admin WHERE username = '".$user."' AND password = '".$pass."' ";
                        $result = mysqli_query($db,$sql_statement);
                        if(!$result){
              
                      $outputDisplay .= "<br><font color=red>mysqli No: ".mysqli_errno($db);
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
                           // require("selectAttendance.php");
                            //require("selectSalary.php");

                        }
                      }
                    ?>

      </div>
      <div id="attendanceTable" style="display:none">
        

      <?php $sql_statement  = " SELECT username ,Branch_name FROM admin WHERE username = '".$user."' AND password = '".$pass."' ";
                        $result = mysqli_query($db,$sql_statement);
                        if(!$result){
              
                      $outputDisplay .= "<br><font color=red>mysqli No: ".mysqli_errno($db);
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
                            
                            require("selectAttendance.php");
                           

                        }
                      }
                    ?>

      </div>

      <div id="salaryTable" style="display:none">
       

      <?php $sql_statement  = " SELECT username ,Branch_name FROM admin WHERE username = '".$user."' AND password = '".$pass."' ";
                        $result = mysqli_query($db,$sql_statement);
                        if(!$result){
              
                      $outputDisplay .= "<br><font color=red>mysqli No: ".mysqli_errno($db);
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
                          
                            require("selectSalary.php");

                        }
                      }
                    ?>

      </div>
     



  <form action="index.php">
    <input type="submit" value="Log Out"></input>
  </form>

  <script>
    $(function(){
   $('button#showEmp').on('click',function(){  
      $('#empTable').toggle();
   });
});

     $(function(){
   $('button#showAtt').on('click',function(){  
      $('#attendanceTable').toggle();
   });
});

      $(function(){
   $('button#showSal').on('click',function(){  
      $('#salaryTable').toggle();
   });
});
  </script>         
</body>
</html>