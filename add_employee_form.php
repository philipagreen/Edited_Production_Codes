<?php
    include ('department.php');
    $deptobj = new Department(); //Defining object of type department
    $title = $deptobj->getJob();
    
    
?>
<!DOCTYPE html>
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
<br>
<br>
<form method = "get" action="process_add_employee.php">
  <label>Employee First Name</label>
  <input type="text" name="fName" >
  <br>
  <label>Emplyeee Last Name</label>
  <input type="text"  name="lName">
  <br>
  <label>Employee DOB (Format:YYYY-MM-DD)</label>
  <input type="date" name="dob">
  <br>
  <label>Gender</label>
  <select name = "gender" >
  <option selected = "true" value="0">--Select One Option--</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
  </select>
  <br>
  <label>Department</label>
  <select name="dept">
  <option selected = "true" value ="0">--Select One--</option>
  <?php
    foreach($title as $deptName):
  ?>
  <option value="<?php echo $deptName["job_position_id"]?>"><?php echo $deptName["job_position_name"]?></option>
  <?php
    endforeach;
  ?>
  </select>
  <br>
  <label>Tenure</label>
  <input type="text" name="tenure">
  <br>
  <label>Status</label>
  <select name="status">
  <option selected = "true" value="0">--Select One--</option>
  <option value="active">Active</option>
  <option value="inactive">Inactive</option>
  </select>
  <br>
  <br>
  <button type ="submit">Create Entry</button>
  </form>
</body>
</html>
