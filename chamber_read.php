<html>
<head>
<title> website</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>

<body>
    
    <style>body {
  background-image: url('photo.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<h1 style="text-align:center;color:white">Chamber Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM chamber" )
		or die("Can not execute query");
	echo "<table class='ui celled table' style='background-color:#FFFFE0'> \n"; 
	echo "<thead><tr><th>Chamber_Rent</th> <th>Chamber_no</th> <th>location</th> <th>Available_Time</th> <th>Telephone_no</th> <th>Doctor_id</th> <th>PA_ID</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Chamber_Rent </td>"; 
		echo "<td> $Chamber_no </td>";
		echo "<td> $location </td>";
        echo "<td> $Available_Time </td>";
		echo "<td> $Telephone_no </td>";
        echo "<td> $Doctor_id </td>";
		echo "<td> $PA_ID </td>";
		echo "<td> <a href = 'chamber_delete.php?
        id=$Chamber_no'> Delete </a> </td>";
		echo "<td> <a href = 'chamber_update_input.php? cr=$Chamber_Rent & id=$Chamber_no & lo=$location & at=$Available_Time & tn=$Telephone_no & di=$Doctor_id & pi=$PA_ID' > Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody></table> \n";
	
	echo "<br><p style='margin: 0px 70px'><a href=chamber_input.php><button class='ui inverted purple button'>
  ADD A NEW DISEASES
</button></a></p>";
?>
   <br><a href="getin.php"><button style='margin: 0px 70px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
	
	</body>
</html>