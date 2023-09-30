<?php

require('config.php');

$query = "SELECT * FROM history";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s %s</p>", $row["Remarks"],$row["V_Date"],$row["V_Month"],$row["V_Year"],$row["H_Code"],$row["Patient_id"],$row["Payment_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>