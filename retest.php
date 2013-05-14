<?php
  include('department.php');
  $output = new Department();
  echo "<pre>";
  print_r($output->getDeptDetails());
  
  $testArray[]=array('firstName'=>'Philip','lastName'=>'Green');
  $testArray[]=array('firstName'=>'Ceri','lastName'=>'Watson');
  $testArray[]=array('firstName'=>'Andrew','lastName'=>'Chung');
  $testArray[]=array('firstName'=>'Stephen','lastName'=>'Green');
  $testArray[]=array('firstName'=>'Glen','lastName'=>'Green');
  $testArray[]=array('firstName'=>'Christopher','lastName'=>'Green');
  
  echo "<pre>";
  print_r($testArray);
  
  
?>
