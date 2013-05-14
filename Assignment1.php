<?php
//Array Definition
$First_Name=array("Philip","Mary","Mark","Juline");
$Last_Name=array("Green","Nelson","Walberg","Mayberry");
$DOB=array("November 22 1982","December 6 1982", "September 7 1982","June 22 1949");
$AGE=array("30","30","30","63");
$Profession=array("Telecoms Engineer","Software Engineer","Head Cook","Bottle Washer");
$Location=array("Jamaica","Bermuda","USA","China");

//Array Definition
$data['firstname'] = array("Philip","Mary","Mark","Juline");
$data['lastname']=array("Green","Nelson","Walberg","Mayberry");
$data['dob']=array("November 22 1982","December 6 1982", "September 7 1982","June 22 1949");
$data['age']=array("30","30","30","63");
$data['profession']=array("Telecoms Engineer","Software Engineer","Head Cook","Bottle Washer");
$data['country']=array("Jamaica","Bermuda","USA","China");

$db_data[] = array(
                    "firstname"=>"Philip",
                    "lastname"=>"Green",
                    "dob"=>"Feb 2",
                    "age"=>"25",
                    "profession"=>"actor",
                    "location"=>"jamaica");
                    
$db_data[] = array(
                    "firstname"=>"Philip",
                    "lastname"=>"Green",
                    "dob"=>"Feb 2",
                    "age"=>"25",
                    "profession"=>"actor",
                    "location"=>"jamaica");

echo "<pre>";
print_r($db_data);
 
//Table Population
echo "
<table border=1>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Profession</th>
<th>Location</th>
</tr>";

for ($i=0;$i<count($Last_Name);$i++)
    {
        echo"
            <tr>
            <td>{$First_Name[$i]}</td>
            <td>{$Last_Name[$i]}</td>
            <td>{$DOB[$i]}</td>
            <td>{$AGE[$i]}</td>
            <td>{$Profession[$i]}</td>
            <td>{$Location[$i]}</td>
            </tr>
            "
        ;
    }
echo "</table>";

//Table Population
echo "<hr>
<table border=1>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Profession</th>
<th>Location</th>
</tr>";

for ($a=0;$a<count($data['firstname']);$a++)
    {
        echo"
            <tr>
            <td>{$data['firstname'][$a]}</td>
            <td>{$data['lastname'][$a]}</td>
            <td>{$data['dob'][$a]}</td>
            <td>{$data['age'][$a]}</td>
            <td>{$data['profession'][$a]}</td>
            <td>{$data['country'][$a]}</td>
            </tr>
            "
        ;
    }
echo "</table>";

//Table Population
echo "<hr>
<table border=1>
<tr>
<th>First Name</th>
<th>Last Name</th>
<th>Date Of Birth</th>
<th>Age</th>
<th>Profession</th>
<th>Location</th>
</tr>";

for ($b=0;$b<count($db_data);$b++):

        echo"
            <tr>
            <td>{$db_data[$b]['firstname']}</td>
            <td>{$db_data[$b]['lastname']}</td>
            <td>{$db_data[$b]['dob']}</td>
            <td>{$db_data[$b]['age']}</td>
            <td>{$db_data[$b]['profession']}</td>
            <td>{$db_data[$b]['location']}</td>
            </tr>
            "
        ;
endfor;

echo "</table>";

?>
