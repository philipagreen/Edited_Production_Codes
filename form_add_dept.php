<?php
     include('department.php');
     $dept = new Department();
     $employees = $dept->getEmployeeDetails();
     
     echo "<pre>";
     //print_r($employees);
     echo "</pre>";
     
 ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
<meta http-equiv="Expires" content="Fri, Jan 01 1900 00:00:00 GMT">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Cache-Control" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Lang" content="en">
<meta name="author" content="">
<meta http-equiv="Reply-to" content="@.com">
<meta name="generator" content="PhpED 6.0">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="creation-date" content="06/01/2011">
<meta name="revisit-after" content="15 days">
<title>Untitled</title>
<link rel="stylesheet" type="text/css" href="my.css">
</head>
<body>
  <form method="get" action="process_add_dept.php">
    <label>Departmemnt Name:</label>
    <input type="text" name="name" id="name" />
    <br>
    <label>Employee count:</label>
    <input type="text" name="employee_count" id="employee_count" />
    <br>
    <label>Manager:</label>
    <select name="manager">
        <option selected="true" value="0">-- Select One --</option>
        <?php foreach($employees as $employee): ?>
            <option value="<?php echo $employee['employee_id'] ?>"><?php echo $employee['lastname'].', '.$employee['firstname'] ?></option>
        <?php endforeach; //end of manager loop ?>
    </select>
    <br>
    <label>Assistant Manager:</label>
    <select name="a_manager">
        <option selected="true" value="0">-- Select One --</option>
        <?php foreach($employees as $employee): ?>
            <option value="<?php echo $employee['employee_id'] ?>"><?php echo $employee['lastname'].', '.$employee['firstname'] ?></option>
        <?php endforeach; //end of assistant manage loop ?>
    </select>
    <br>
    <button type="submit">Save</button>
  </form>
</body>
</html>
