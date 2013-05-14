<?php
  include('department.php');
  $deptObj= new Department();
  
  $employeenum = $_GET['empid'];
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $dob=$_POST['dob'];
  $gender=$_POST['sex'];
  $jobid=$_POST['dept'];
  $tenure=$_POST['tenure'];
  $status=$_POST['status'];
  
  $update=$deptObj->editEmployeeRecord($employeenum, $firstname, $lastname, $dob, $gender, $jobid, $tenure, $status);
?>
