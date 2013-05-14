<?php
  include('department.php');
  $deptObj = new Department();
  
  $variable=$_GET['employeeId'];
  
  $result=$deptObj-> delEmployeeRecord($variable);
?>
