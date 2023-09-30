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
    
    <h1 style="text-align:center">DOCTOR's INFORMATIONS</h1>
    <?php
    
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM doctor" )
		or die("Can not execute query");
	
    echo "<table style='width: 90%;margin: 0 auto'class='ui celled unstackable table'> \n"; 
	
    echo "<thead><tr><th>Doctor_id</th> <th>First_Name</th> <th>Middle_Name</th> <th>Last_Name</th> <th>Age</th> <th>Doctor_Number</th> <th>Doctor_Email</th> <th>Joining_Date</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	
    while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Doctor_id </td>"; 
		echo "<td> $First_Name </td>";
		echo "<td> $Middle_Name </td>";
        echo "<td> $Last_Name </td>";
		echo "<td> $Age </td>";
        echo "<td> $Doctor_Number </td>";
		echo "<td> $Doctor_Email </td>";
        echo "<td> $Joining_Date </td>";
		
        
        echo "<td> <a href = 'doctor_delete.php?
        id=$Doctor_id'> Delete </a> </td>";
		
        
        echo "<td> <a href = 'doctor_update_input.php?id=$Doctor_id&fname=$First_Name&mname=$Middle_Name&lname=$Last_Name&age=$Age&dno=$Doctor_Number&dem=$Doctor_Email&jdate=$Joining_Date'> Update </a> </td>";
		echo "</tr> \n";
	}
	
    echo "</tbody></table> \n";
	
    echo "<br><p style='margin: 0px 80px'><a href=doctor_input.php><button class='ui inverted orange button'>
  ADD A NEW DOCTOR
</button></a></p>";
    
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>