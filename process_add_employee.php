<?php
  include('department.php');
  $dataObj = new Department();
  
  $firstName=$_GET['fName'];
  $lastName=$_GET['lName'];
  $dob=$_GET['dob'];
  $gender=$_GET['gender'];
  $jobid=$_GET['dept'];
  $tenure=$_GET['tenure'];
  $status=$_GET['status'];
  
  
  $newRecord=$dataObj->newEmployeeRecord($firstName, $lastName, $dob, $gender, $jobid, $tenure, $status);
?>
