<?php

require('config.php');

$query = "SELECT * FROM diseases";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s</p>", $row["Diseases_Name"],$row["Diseases_Code"],$row["Diseases_Symptom"],$row["Doctor_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>