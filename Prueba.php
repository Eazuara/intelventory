<!DOCTYPE html>
 <?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'company';

$dbconn = mysqli_connect($dbhost, $dbuser, $dbpass);
mysql_select_db($db);




if (isset($_POST['submit']))
{
    $Dname = $_POST['Dname'];
    $Dnumber = $_POST['Dnumber'];
    $Mgr_ssn = $_POST['Mgr_ssn'];
    $Mgr_start_date = $_POST['Mgr_start_date'];
    $total_sal = $_POST['total_sal'];
   


     $query = ("INSERT INTO department (Dname, Dnumber, Mgr_ssn, Mgr_start_date, total_sal) VALUES ('$Dname', '$Dnumber', '$Mgr_ssn', '$Mgr_start_date', '$total_sal')");

if(mysql_query($query))
 {
echo "<script>alert('INSERTED SUCCESSFULLY');</script>";
}
else
 {
 echo "<script>alert('FAILED TO INSERT');</script>";
 }

 }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
        <form action="" method = "POST">

 DepartName: <input type="text" name="Dname"><br>
  DepartNumber: <input type="text" name="Dnumber"><br>
  Manager ssn: <input type="text" name="Mgr_ssn"><br>
  Manager start date: <input type="text" name="Mgr_start_date"><br>
  Total Salary: <input type="text" name="total_sal"><br>

<button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
</form>
    </body>
</html> 