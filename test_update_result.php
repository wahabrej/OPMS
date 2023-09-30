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
        
<?php
    $tn = $_GET["tn"];
	$r = $_GET["r"];
	$tin = $_GET["tin"];
    $id = $_GET["id"];
	$pid = $_GET["pid"];
	$did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE test SET Test_Name='$tn', Result='$r', Time_Needed='$tin', Patient_id='$pid', Doctor_id='$did' WHERE Test_Serial = $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'>Test Name = $tn <br> Result = $r <br> Time Needed = $tin <br> Patient's ID = $pid <br> Doctor's ID = $did</p>";

    echo "<br><p style='margin: 0px 60px'><a href=test_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>