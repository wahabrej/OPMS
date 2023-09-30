<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
        <style>body {
  background-image: url('obe.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
	$bg = $_GET["Blood_Group"];
	$qb = $_GET["Quantity_Blood"];
    $nod = $_GET["Number_of_donations"];
	$pid = $_GET["Patient_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO blood VALUES ( '$bg', '$qb',NULL,'$nod',$pid)")
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record inserted:</h3><br><p style='margin: 0px 60px'> Blood Group = $bg <br> Quantity Of Blood = $qb <br> Donation No = $nod <br> Patient's ID = $pid</p>";

	 echo "<br><p style='margin: 0px 60px'><a href=blood_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";
?>
 <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>