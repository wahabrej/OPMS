<html>
<head>
<title> website</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body>
    
    <style>body {
  background-image: url('final2.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

 <h1 style="text-align:center; color:white">Blood Record</h1>                                     
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM blood" )
		or die("Can not execute query");
	echo "<table class='ui celled table' style='background-color:#FFFFE0'> \n"; 
	echo "<thead><tr><th>Blood_Group</th> <th>Quantity_Blood</th> <th>Donor_ID</th> <th>Number_of_donations</th> <th>Patient_id</th>  <th>Delete</th> <th>Update</th></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Blood_Group </td>"; 
		echo "<td> $Quantity_Blood</td>";
		echo "<td> $Donor_ID </td>";
        echo "<td> $Number_of_donations </td>";
		echo "<td> $Patient_id </td>";
		echo "<td> <a href = 'blood_delete.php?
        id=$Donor_ID'> Delete </a> </td>";
		echo "<td> <a href = 'blood_update_input.php?bg=$Blood_Group&qb=$Quantity_Blood&id=$Donor_ID&nd=$Number_of_donations&pi=$Patient_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</thead></table> \n";
	echo "<br><p style='margin: 0px 70px'><a href=blood_input.php><button class='ui inverted purple button'>
  ADD A NEW DISEASES
</button></a></p>";

	?>
	 <br><a href="getin.php"><button style='margin: 0px 70px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
	
	</body>
</html>