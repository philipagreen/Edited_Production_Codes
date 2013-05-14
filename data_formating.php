<?php
  class dataFormatting
  {
      function tableCreation($tableData)
      {
          echo "<hr>
          <table border=1>
          <tr>
          <th>Employee ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Age</th>
          <th>Job Position</th>
          <th>Date of Birth</th>
          <th>Tenure</th>
          <th>Gender</th>
          <th>Status</th>
          <th>Actions</th>
          </tr>";
          
          for($i=0;$i<count($tableData);$i++)
            {
                echo "<tr>
                      <td>{$tableData[$i]["employee_id"]}</td>
                      <td>{$tableData[$i]["firstname"]}</td>
                      <td>{$tableData[$i]["lastname"]}</td>
                      <td>{$tableData[$i]["age"]}</td>
                      <td>{$tableData[$i]["job_position_name"]}</td>
                      <td>{$tableData[$i]["date_of_birth"]}</td>
                      <td>{$tableData[$i]["tenure"]}</td>
                      <td>{$tableData[$i]["sex"]}</td>
                      <td>{$tableData[$i]["status"]}</td>
                      <td><a href='edit_sel_rec.php?employeeId={$tableData[$i]["employee_id"]}'>Edit</a> | <a href='del_sel_rec.php?employeeId={$tableData[$i]['employee_id']}'>Delete</a></td>
                      </tr>";
            }
      }
  }
?>
