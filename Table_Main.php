<?php
  include('department.php');
  include('data_formating.php');
  
  $departDat= new Department();
  $output = new dataFormatting();
  
  $departmentData = $departDat->getDeptDetails();
  $output->tabelCreation($departmentData);
  
  $recordChange= $departDat->updateRecrod($_GET['deptId'],$_GET['mng']);
  echo "<br>";
  echo "<br>";
  echo "<br>";
  echo "<hr>";
  echo 'This is the Table after Recrod has been edited';
  echo "<br>";
  $departmentData = $departDat->getDeptDetails();
  $output->tabelCreation($departmentData);
?>
