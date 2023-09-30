<?php

require('config.php');

$query = "SELECT * FROM payment";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s %s %s %s</p>", $row["Payment_id"],$row["Payment_Date"],$row["Old_Amount"],$row["New_Amount"],$row["Total_Payment"],$row["Paid"],$row["Unpaid"],$row["Payment_Time"],$row["Patient_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>