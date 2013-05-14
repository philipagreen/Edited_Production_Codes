<?php

define('YEAR', '2007');

echo "this is test from ".$_GET['name'];

$number = 1;
$string = 'test';
$string_2 = '$string';
$string_3 = "$string";

$array1[] = "philip green";
$array1[] = "mary hall";

echo "<pre>";
print_r($array1);

echo "<hr>";
echo "Number: ".$number." the end.";
echo "<br>";
echo "String Orig: $string";
echo "<br>";
echo "String 2: $string_2";
echo "<br>";
echo "String 3: $string_3";
echo "<br>";
echo '$array1[0]["test"]';
echo "<br>";
echo "$array1[0]['test']";
echo "<br>";
echo 'My name is ' .$array1[0]. ' I am 43 years old and married with 10 children';
echo "<br>";
echo YEAR;

echo("<hr>");
if ($string == 'test') {
    echo "test has started";
} else {
    echo "test has NOT started";
}

echo("<hr>");
for ($i=0; $i<count($array1); $i++) {
    echo "<b>My name is {$array1[$i]}. I am 43 years old and married with $i children.</b>";
    echo "<br>"; 
}

?>