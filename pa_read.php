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
    
    <h1 style="text-align:center">PA's Information</h1>
<?php
    
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM pa" )
		or die("Can not execute query");
	
    echo "<table style='width: 90%;margin: 0 auto'class='ui celled unstackable table'> \n";  
	
    echo "<thead><tr><th>Salary</th> <th>Email_PA</th> <th>Start_Name</th> <th>End_Name</th> <th>PA_Number</th> <th>Street</th> <th>Zip_Code</th> <th>City</th> <th>PA_ID</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th> </tr></thead><tbody> \n";
	
    while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Salary </td>"; 
		echo "<td> $Email_PA </td>";
		echo "<td> $Start_Name </td>";
        echo "<td> $End_Name </td>";
		echo "<td> $PA_Number </td>";
        echo "<td> $Street </td>";
		echo "<td> $Zip_Code </td>";
        echo "<td> $City </td>";
        echo "<td> $PA_ID</td>";
        echo "<td> $Doctor_id </td>";
		
        echo "<td> <a href = 'pa_delete.php?
        id=$PA_ID'> Delete </a> </td>";
		
        echo "<td> <a href = 'pa_update_input.php? s=$Salary&ep=$Email_PA&sn=$Start_Name&en=$End_Name&pn=$PA_Number&st=$Street&zp=$Zip_Code&c=$City&id=$PA_ID&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
    
    echo "</tbody></table> \n";
	
    echo "<br><p style='margin: 0px 80px'><a href=pa_input.php><button class='ui primary button'>
  ADD A NEW PA
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>