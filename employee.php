<?php

include('db_connection.php');

class Employee
{
    function getAllEmployees()
    {
        $result = mysql_query('SELECT * 
                                FROM employee AS emp
                                INNER JOIN job_position AS jp ON emp.job_position_id = jp.job_position_id');
        
        if ($result) {
            while($row = mysql_fetch_assoc($result)){
                $data[] = $row;
            }
            
            return $data;
        }
        
        return "No result found";
    }
    
    function updateAgeByEmployeeId($employee_id, $age)
    {
        $result = mysql_query("UPDATE employee SET age = $age WHERE employee_id = $employee_id");
    }
}

?>
