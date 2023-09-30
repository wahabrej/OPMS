<?php

require('config.php');

$query = "SELECT * FROM patient";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s %s %s %s %s %s %s %s</p>", $row["Patient_id"],$row["Email"],$row["DOB"],$row["First_Name"],$row["Middle_Name"],$row["Last_Name"],$row["Patient_Number"],$row["Street"],$row["City"],$row["Zip_Code"],$row["State"],$row["Doctor_id"]);
	}  
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>