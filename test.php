<?php

require('config.php');

$query = "SELECT * FROM test";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s</p>", $row["Test_Name"],$row["Result"],$row["Time_Needed"],$row["Test_Serial"],$row["Patient_id"],$row["Doctor_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>