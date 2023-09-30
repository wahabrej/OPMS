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
    
    <h1 style="text-align:center">Showing patient's full name who are in Dhaka city.</h1>
    <?php
    
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT First_Name,Middle_Name,Last_Name from patient WHERE Zip_Code IN(SELECT Zip_Code FROM patient WHERE City = 'Dhaka')" )
		or die("Can not execute query");
	
    echo "<table style='width: 90%;margin: 0 auto'class='ui celled unstackable table'> \n"; 
	
    echo "<thead><tr><th>First_Name</th><th>Middle_Name</th><th>Last_Name</th></tr></thead><tbody> \n";
	
    while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $First_Name</td>"; 
        echo "<td> $Middle_Name</td>"; 
        echo "<td> $Last_Name</td>";  
	}
	
    echo "</tbody></table> \n";
    
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
    
    <a href="patient_input.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Back</button></a>
</body>
</html>