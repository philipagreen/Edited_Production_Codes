<?php

$server = 'localhost'; //Server Name 
$username = 'root';    //Server Password

$connection = mysql_connect($server, $username, null);  //Connection to Server with No Password

if (!$connection) {
    die("MySql could not connect");
}

$db_selected = mysql_select_db('test', $connection);   //Selecting Specific Table in DataBase

if (!$db_selected) {
    die("Unable to select DB 'Test'");
}

echo "Database Connection Success!!";                   //Default out put if database connection and table selection is successful

?>
