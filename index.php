<?php



echo <<< HTML
	
<html>
    <head>
        <meta charset="UTF-8">
        <title>sample</title>
    </head>
    <body>
        <form action="insert.php" method = "POST">

 DepartName: <input type="text" name="Dname"><br>
  DepartNumber: <input type="text" name="Dnumber"><br>
  Manager ssn: <input type="text" name="Mgr_ssn"><br>
  Manager start date: <input type="text" name="Mgr_start_date"><br>
  Total Salary: <input type="text" name="total_sal"><br>

<button type ="submit" name="submit" value="send to database"> SEND TO DATABASE </button>
</form>
    </body>
</html> 
HTML;
?>