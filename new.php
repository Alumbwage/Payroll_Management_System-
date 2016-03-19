<?php 
require("connection.php")
    $table = $_POST['table'];
if($table == "Employee"){
                                        require("selectFromEmployee.php");
                                      }

                                       if($table== "Attendance"){
                                        require("selectAttendance.php");
                                      }

                                       if($table== "Salary"){
                                        require("selectSalary.php");
                                      } ?>
