<?php

require('config.php');

$query = "SELECT * FROM doctor";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s %s %s</p>", $row["Doctor_id"], $row["First_Name"],$row["Middle_Name"], $row["Last_Name"],$row["Age"],$row["Doctor_Number"],$row["Doctor_Email"], $row["Joining_Date"]);
	}
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>