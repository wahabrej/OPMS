<?php

require('config.php');

$query = "SELECT * FROM method";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s</p>", $row["Method_Code"],$row["Method_Process"],$row["Method_Used_for"],$row["Payment_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>