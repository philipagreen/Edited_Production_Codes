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
<?php

 include('department.php');
 include('data_formating.php');
 $employeeTable= new Department();
 $dataDisplay= new dataFormatting();
 
 $viewEmployee=$employeeTable->getEmployeeDetails();
 $displayData=$dataDisplay->tableCreation($viewEmployee);
  
?>
  
</body>
</html>
