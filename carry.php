<?php

require('config.php');

$query = "SELECT * FROM carry";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s</p>", $row["C_Days"],$row["Patient_id"],$row["Diseases_Code"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>