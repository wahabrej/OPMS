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
    
    <h1 style="text-align:center">Test's Information</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM test" )
		or die("Can not execute query");
	
    echo "<table style='width: 90%;margin: 0 auto'class='ui celled unstackable table'> \n"; 
	
    echo "<thead><tr><th>Test_Name</th> <th>Result</th> <th>Time_Needed</th> <th>Test_Serial</th> <th>Patient_id</th> <th>Doctor_id</th> <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	
    while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Test_Name </td>"; 
		echo "<td> $Result </td>";
		echo "<td> $Time_Needed </td>";
        echo "<td> $Test_Serial </td>";
		echo "<td> $Patient_id </td>";
        echo "<td> $Doctor_id </td>";
		
        echo "<td> <a href = 'test_delete.php?
        id=$Test_Serial'> Delete </a> </td>";
		
        echo "<td> <a href = 'test_update_input.php?tn=$Test_Name&r=$Result&tin=$Time_Needed&id=$Test_Serial&pid=$Patient_id&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody></table> \n";
	
    echo "<br><p style='margin: 0px 70px'><a href=test_input.php><button class='ui inverted orange button'>
  ADD A NEW TEST
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>