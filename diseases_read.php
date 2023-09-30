<html>
<head> 
    
    <title>OPMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
</head>
    
<body>
    
    <style>body {
  background-image: url('ji.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    
    <h1 style="text-align:center">Diseases Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM diseases" )
		or die("Can not execute query");
	
    echo "<table style='width: 90%;margin: 0 auto' class='ui celled unstackable table'> \n"; 
	
    echo "<thead><tr><th>Diseases_Name</th> <th>Diseases_Code</th> <th>Diseases_Symptom</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	
    while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Diseases_Name </td>"; 
		echo "<td> $Diseases_Code </td>";
		echo "<td> $Diseases_Symptom</td>";
        echo "<td> $Doctor_id </td>";
		
        echo "<td> <a href = 'diseases_delete.php?
        id=$Diseases_Code'> Delete </a> </td>";
		
        echo "<td> <a href = 'diseases_update_input.php?dn=$Diseases_Name&id=$Diseases_Code&ds=$Diseases_Symptom&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
    
    echo "</tbody></table> \n";
	echo "<br><p style='margin: 0px 70px'><a href=diseases_input.php><button class='ui inverted purple button'>
  ADD A NEW DISEASES
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>	