<?php

include('common.php');
include('employee.php');

$common = new commonFunctions();
$common2 = new commonFunctions();
$common3 = new commonFunctions();

$bolded_name = $common->boldName($_GET['name']);
$colored_name = $common->colorName($bolded_name, 'RED');

echo $colored_name;
$common->printRuler();

$common->pub_var = "This is a public variable";
echo $common->pub_var;

$common->printRuler();

$common->setPrivateVar("This is a private variable");
echo $common->getPrivateVar();

$common->printRuler();

$common2->setPrivateVar("This is from the SECOND Private object");
echo $common2->getPrivateVar();

$common->printRuler();

$employee = new Employee();

$all_employees = $employee->getAllEmployees();
$common->printFormattedArray($all_employees);

$employee->updateAgeByEmployeeId($_GET['id'], $_GET['age']);


?>
