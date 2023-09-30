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

<h1 style="text-align:center; color:white">Method read</h1>
<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM method" )
		or die("Can not execute query");
	echo "<table class='ui celled table' style='background-color:pink'>\n"; 
	echo "<thead><tr><th>Method_Code</th> <th>Method_Process</th> <th>Method_Used_for</th> <th>Payment_id</th><th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Method_Code </td>"; 
		echo "<td> $Method_Process </td>";
		echo "<td> $Method_Used_for </td>";
        echo "<td> $Payment_id </td>";
		echo "<td> <a href = 'method_delete.php?
        id=$Method_Code'> Delete </a> </td>";
		echo "<td> <a href = 'method_update_input.php?id=$Method_Code & mp=$Method_Process & mu=$Method_Used_for & pi=$Payment_id'> Update </a> </td>";
		echo "</tr> \n";
	}
	echo "</tbody></table> \n";
	echo "<br><p style='margin: 0px 70px'><a href=method_input.php><button class='ui inverted purple button'>
  ADD A New Method
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>	