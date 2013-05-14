<?php
  include('department.php');
  
  $departDat = new Department();
  
  echo "<pre>";
 print_r($_GET);
 echo "</pre>";
 
 $dept_name = $_GET['name'];
 $emp_count = $_GET['employee_count'];
 $manager = $_GET['manager'];
 $a_manager = $_GET['a_manager'];
 
 $dept_id = $departDat->addDeptRecrod($dept_name, $emp_count, $manager, $a_manager);
 
 if ($dept_id) {
     echo "Department created successfully with ID $dept_id.";
 } else {
     echo "Unable to create new Department.";
 }
?>
