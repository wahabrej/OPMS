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
        
<?php
	$dn  = $_GET["dn"];
	$id = $_GET["id"];
	$ds = $_GET["ds"];
    $did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE diseases SET Diseases_Name='$dn', Diseases_Symptom='$ds', Doctor_id='$did' WHERE Diseases_Code = $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'>Diseases Name = $dn <br> Diseases Symptom = $ds <br> Doctor's ID = $did</p>";

    echo "<br><p style='margin: 0px 60px'><a href=diseases_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";	
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>