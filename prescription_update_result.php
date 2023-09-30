<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
         <style>body {
    background-image: url('final22.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<?php
	
	$id = $_GET["id"];
    $dir = $_GET["dir"];
	$me = $_GET["me"];
	$d  = $_GET["d"];
	$di = $_GET["di"];
    $pi = $_GET["pi"];
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE prescription SET Direction='$dir', Medicine='$me', Dose='$d',Doctor_id='$di', Patient_id='$pi' WHERE Prescription_no= '$id'";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'>  Direction= $dir <br> Medicine = $me <br> Dose= $d <br>  Doctor's ID= $di <br> Patient's ID = $pi </p> ";
    echo "<br><p style='margin: 0px 60px'><a href=prescription_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";	
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>