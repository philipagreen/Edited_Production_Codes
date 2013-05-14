<?php
  
include('db_connection.php');


class Department
{
    function getDeptDetails()
    {
        $result = mysql_query('SELECT * FROM department');
        
        if ($result) 
            {
                while($row = mysql_fetch_assoc($result))
                    {
                         $data[] = $row;
                    }
            
            return $data;
            }
        
        return "No result found";
    }
    
    function getEmployeeDetails()
    {
        $result = mysql_query('SELECT * FROM employee AS emp INNER JOIN job_position AS jp ON emp.job_position_id=jp.job_position_id');
        
        if ($result) 
            {
                while($row = mysql_fetch_assoc($result))
                    {
                         $data[] = $row;
                    }
            
            return $data;
            }
        
        return "No result found";
    }
    
    function getEmployeeDetailsById($empId)
    {
        $result = mysql_query("SELECT * FROM employee WHERE employee.employee_id=$empId");
        
        if ($result) 
            {
                while($row = mysql_fetch_assoc($result))
                    {
                         $data[] = $row;
                    }
            
            return $data;
            }
        
        return "No result found";
    }
    
    function updateRecrod($deptId,$manager)
    {
        try
        {
            $sql="UPDATE department SET manager='$manager' WHERE department_id=$deptId";
             $result=mysql_query($sql);
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
    }
    
    function addDeptRecrod($name,$employee_count, $manager_id, $assistant_manager_id)
    {
        try
        {
            $sql = "INSERT INTO 
                        department (name, employee_count, manager_id, assistant_manager_id)
                        VALUES
                            ('$name', $employee_count, $manager_id, $assistant_manager_id)";
                            
             $result = mysql_query($sql);
             
             if ($result !== FALSE) {
                 $id = mysql_insert_id();
                 return $id;
             }
        }
        catch (Exception $e)
        {
            echo $e->getMessage();
        }
        
        return false;
    }
    
    function getJob()
    {
        $result = mysql_query('SELECT * FROM job_position');
        if ($result)
        {
            while ($tablerow=mysql_fetch_assoc($result))
            {
                $jobData[]=$tablerow;
            }
         return $jobData;    
        }
        
        return "No Data in Job Position Table";
    }
    

    function newEmployeeRecord($firstName, $lastName, $dob, $gender, $jobid, $tenure, $status)
    {
        $dateofbirth= new DateTime($dob);
        $todaydate= new DateTime();
        $age=$todaydate->diff($dateofbirth);
        $years = $age->y;
        
        $result=mysql_query("INSERT INTO employee (firstname,lastname, date_of_birth, age, sex, job_position_id, tenure, status)
                                VALUES ('$firstName', '$lastName', '$dob', $years, '$gender', $jobid, $tenure, '$status')");
    }
    
    function editEmployeeRecord($employeenum, $firstname, $lastname, $dob, $gender, $jobid, $tenure, $status)
    {
        $dateofbirth= new DateTime($dob);
        $todaydate= new DateTime();
        $age=$todaydate->diff($dateofbirth);
        $years = $age->y;
        
        $result=mysql_query("UPDATE employee SET
                             firstname='$firstname',
                             lastname='$lastname',
                             date_of_birth='$dob',
                             age=$years,
                             sex='$gender',
                             job_position_id=$jobid,
                             tenure=$tenure,
                             status='$status' WHERE
                             employee_id='$employeenum'");
    }
    
    function delEmployeeRecord($employeeId)
    {
        $result=mysql_query("DELETE FROM employee WHERE employee_id=$employeeId");
    }
}
?>

