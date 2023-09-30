<?php

require('config.php');

$query = "SELECT * FROM pa";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s %s %s %s %s</p>", $row["Salary"],$row["Email_PA"],$row["Start_Name"],$row["End_Name"],$row["PA_Number"],$row["Street"],$row["Zip_Code"],$row["City"],$row["PA_ID"],$row["Doctor_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>