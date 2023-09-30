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
    
    <h1 style="text-align:center;color:white">History Information</h1>

<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM history" )
		or die("Can not execute query");
	echo "<table class='ui celled table'> \n"; 
	echo "<thead><tr><th>Remarks</th> <th>V_Date</th> <th>V_Month</th> <th>V_Year</th> <th>H_Code</th> <th>Patient_id</th> <th>Payment_id</th>  <th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Remarks </td>"; 
		echo "<td> $V_Date </td>";
		echo "<td> $V_Month </td>";
        echo "<td> $V_Year </td>";
		echo "<td> $H_Code </td>";
        echo "<td> $Patient_id</td>";
		echo "<td> $Payment_id </td>";
		echo "<td> <a href = 'history_delete.php?
        id=$H_Code'> Delete </a> </td>";
		echo "<td> <a href = 'history_update_input.php?r=$Remarks & vd=$V_Date & vm=$V_Month & vy=$V_Year & id=$H_Code & pi=$Patient_id & pai=$Payment_id'> Update </a> </td>";
		echo "</tr> \n";
	}
echo "</thead></table> \n";
echo "<br><p style='margin: 0px 70px'><a href=history_input.php><button class='ui inverted purple button'>
  ADD A NEW DISEASES
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>	