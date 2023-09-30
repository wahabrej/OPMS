<?php

require('config.php');

$query = "SELECT * FROM chamber";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s %s</p>", $row["Chamber_Rent"],$row["Chamber_no"],$row["location"],$row["Available_Time"],$row["Telephone_no"],$row["Doctor_id"],$row["PA_ID"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>