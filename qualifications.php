<?php

require('config.php');

$query = "SELECT * FROM qualifications";

if ($result = $conn->query($query)) 
{
	printf("<br>%d record(s) found!<br>", $result->num_rows);
	
          /* fetch associative array */
       while ($row = $result->fetch_assoc()) 
	{
		printf("<p>%s %s %s %s %s</p>", $row["Doc_Q_length"],$row["Doc_Degree"],$row["Doc_Institution"],$row["Qua_ID"],$row["Doctor_id"]);
	}
	$result->free(); //free result set
}
else
{
	printf("No record found!");
}

$conn->close();
?>