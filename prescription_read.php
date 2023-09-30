<html>
<head> 
    
    <title>OPMS</title>
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
    
    
    <h1 style="text-align:center; color:white">PRESCRIPTION Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM prescription" )
		or die("Can not execute query");
	echo "<table class='ui celled table' style='background-color:#FFFFE0'>\n"; 
	echo "<thead><tr><th>Prescription_no</th> <th>Direction</th> <th>Medicine</th> <th>Dose</th>  <th>Doctor_id</th> <th>Patient_id</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Prescription_no </td>"; 
		echo "<td> $Direction </td>";
		echo "<td> $Medicine </td>";
        echo "<td> $Dose </td>";
		echo "<td> $Doctor_id </td>";
        echo "<td> $Patient_id </td>";
		echo "<td> <a href = 'prescription_delete.php?
        id=$Prescription_no'> Delete </a> </td>";
		echo "<td> <a href = 'prescription_update_input.php?id=$Prescription_no & dir=$Direction & me=$Medicine & d=$Dose & di=$Doctor_id & pi=$Patient_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody></table> \n";
	
	echo "<br><p style='margin: 0px 70px'><a href=prescription_input.php><button class='ui inverted purple button'>
  ADD A NEW DISEASES
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>	