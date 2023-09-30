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
	$r = $_GET["r"];
    $vd = $_GET["vd"];
	$vm = $_GET["vm"];
	$vy  = $_GET["vy"];
	$id = $_GET["id"];
    $pi = $_GET["pi"];
	$pai = $_GET["pai"];


	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE history SET Remarks='$r', V_Date='$vd', V_Month='$vm',V_Year='$vy', Patient_id='$pi', Payment_id='$pai' WHERE H_Code= $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'>  Remarks= $r <br> Visiting Date = $vd <br> Visiting Month= $vm <br>  Visiting Year= $vy <br> Patient's ID = $pi <br> Payment's ID= $pai </p>";

 echo "<br><p style='margin: 0px 60px'><a href=history_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";	
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>