<html>
<head> 
    
    <title>OPMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    
</head>
    
<body>
    
     <style>body {
  background-image: url('rr.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    
    <h1 style='text-align:center;color: white'>Doctor's Qualifications</h1>
    <?php
    
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$results = mysqli_query( $connect, "SELECT * FROM qualifications" )
		or die("Can not execute query");
    
	echo "<table style='width: 90%;margin: 0 auto' class='ui celled unstackable table'> \n"; 
    
	echo "<thead><tr><th>Doc_Q_length</th> <th>Doc_Degree</th> <th>Doc_Institution</th> <th>Qua_ID</th> <th>Doctor_id</th><th>Delete</th> <th>Update</th></tr></thead><tbody> \n";
	
    while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $Doc_Q_length </td>"; 
		echo "<td> $Doc_Degree </td>";
		echo "<td> $Doc_Institution </td>";
        echo "<td> $Qua_ID </td>";
		echo "<td> $Doctor_id</td>";
		
        echo "<td> <a href = 'qualifications_delete.php?
        id=$Qua_ID'> Delete </a> </td>";
		
        echo "<td> <a href = 'qualifications_update_input.php?dol=$Doc_Q_length&dd=$Doc_Degree&di=$Doc_Institution&id=$Qua_ID&did=$Doctor_id'> Update </a> </td>";
		echo "</tr> \n";
	}
    
    echo "</tbody></table> \n";
	
    echo "<br><p style='margin: 0px 80px'><a href=qualifications_input.php><button class='ui primary button'>
  ADD NEW QUALIFICATION
</button></a></p>";
?>
    <br><a href="getin.php"><button style='margin: 0px 80px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>