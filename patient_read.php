<html>
<head> 
    
    <title>OPMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
</head>
    
<body>
    
    <style>body {
  background-image: url('hh.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    
    <h1 style="text-align:center">Patient's Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM patient" )
		or die("Can not execute query");
	echo "<table style='width: 90%;margin: 0 auto'class='ui celled unstackable table'> \n"; 
    
	echo "<thead><tr><th>Patient_id</th> <th>Email</th> <th>DOB</th> <th>First_Name</th> <th>Middle_Name</th> <th>Last_Name</th> <th>Patient_Number</th> <th>Street</th> <th>City</th> <th>Zip_Code</th> <th>State</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	
    while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Patient_id </td>"; 
        echo "<td> $Email </td>"; 
        echo "<td> $DOB </td>"; 
		echo "<td> $First_Name </td>";
		echo "<td> $Middle_Name </td>";
        echo "<td> $Last_Name </td>";
		echo "<td> $Patient_Number </td>";
        echo "<td> $Street </td>";
		echo "<td> $City </td>";
        echo "<td> $Zip_Code </td>";
        echo "<td> $State </td>";
        echo "<td> $Doctor_id </td>";
		
        echo "<td> <a href = 'patient_delete.php?
        id=$Patient_id'> Delete </a> </td>";
		
        echo "<td> <a href = 'patient_update_input.php?id=$Patient_id&e=$Email&dob=$DOB&fn=$First_Name&mn=$Middle_Name&lm=$Last_Name&pn=$Patient_Number&st=$Street&c=$City&zc=$Zip_Code&sta=$State&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
    echo "</tbody></table> \n";
	
    echo "<br><p style='margin: 0px 70px'><a href=patient_input.php><button class='ui inverted orange button'>
  ADD A NEW PATIENT
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>