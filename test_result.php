<html>
	<head>
		<title>Doctor's Information</title>
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
	$tn = $_GET["Test_Name"];
	$r = $_GET["Result"];
    $tin = $_GET["Time_Needed"];
	$pid = $_GET["Patient_id"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO test VALUES ( '$tn', '$r','$tin',NULL,$pid,$did)")
		or die("Can not execute query");

	echo "<h2 style='margin: 0px 60px'>Record inserted:</h2><br><p style='margin: 0px 60px'>Test Name = $tn <br> Result = $r <br> Time_Needed = $tin <br> Patient's ID = $pid <br> Doctor's ID = $did</p>";

    echo "<br><p style='margin: 0px 60px'><a href=test_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>