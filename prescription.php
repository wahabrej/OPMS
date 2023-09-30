<?php

require('config.php');

$query = "SELECT * FROM prescription";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s</p>", $row["Prescription_no"], $row["Direction"],$row["Medicine"],$row["Dose"],$row["Doctor_id"],$row["Patient_id"]);
	}
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>