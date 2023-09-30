<?php

require('config.php');

$query = "SELECT * FROM blood";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s</p>", $row["Blood_Group"],$row["Quantity_Blood"],$row["Donor_ID"],$row["Number_of_donations"],$row["Patient_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>