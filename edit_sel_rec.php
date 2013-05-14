
<?php
include('department.php');
$editRecord= new Department();

$variable=$_GET['employeeId'];

$recordEdit= $editRecord->getEmployeeDetailsById($variable);
$deptList = $editRecord->getJob();

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
<form method = "post" action="process_edit_employee.php?empid=<?php echo $variable ?>">

<?php
   /* echo"<pre>";
    print_r($recordEdit);
    echo"</pre>";
    */
?>

<label>Employee ID Number: <?php echo $variable?></label>
<br>
<label>First Name</label>
<input type="text" name="fname" selected="true" value="<?php echo $recordEdit[0]['firstname']?>">
<br>
<label>Last Name</label>
<input type="text" name=lname selected="true" value="<?php echo $recordEdit[0]['lastname']?>">
<br>
<label>Date of Birth (Format:YYYY-MM-DD)</label>
<input type="text" name=dob selected="true" value="<?php echo $recordEdit[0]['date_of_birth']?>">
<br>
<label>Gender</label>
<select name="sex">
<?php
    if($recordEdit[0]['sex']=='MALE')
    {
        echo '<option selected ="true" value="male" >Male</option>';
        echo '<option value="female">Female</option>';
    }
    else
    {
        echo '<option value="male">Male</option>';
        echo '<option value="female" selected ="true">Female</option>';
    }
?>
</select> 
<br>
<label>Tenure</label>
<input type="text" name="tenure" selected="true" value="<?php echo $recordEdit[0]['tenure']?>">
<br>
<label>Department</label>
<select name="dept">
<?php
    foreach($deptList as $deptRecord):
    ?>  
      <?php
      if($deptRecrod['job_position_id']==$recordEdit[0]['job_position_id']):
            ?>
       <option selected = "true" value="<?php echo $deptRecord['job_position_id']?>"><?php echo $deptRecord['job_position_name']?></option>';
      
      <?php
      else:
            ?>             
       <option value="<?php echo $deptRecord['job_position_id']?>"><?php echo $deptRecord['job_position_name']?></option>';
       <?php
       endif;
            ?>
<?php
    endforeach;
    ?>       
</select>
<br>
<label>Status</label>
<select name = "status">
<<?php
      if($recordEdit[0]['status']=="ACTIVE")
      {
          echo '<option selected="true" value="active">ACTIVE</option>';
          echo '<option value="inactive">INACTIVE</option>';
      }
      else
      {
          echo '<option selected="true" value="inactive">INACTIVE</option>';
          echo '<option value="active">ACTIVE</option>';
      }
  ?>
</select>
<br><br>
<button type="submit">Apply Changes</button>

</form>
</body>
</html>
