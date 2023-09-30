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
        
<?php
	$dql = $_GET["Doc_Q_length"];
	$dd = $_GET["Doc_Degree"];
    $di = $_GET["Doc_Institution"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO qualifications VALUES ('$dql','$dd','$di',NULL,'$did')")
		or die("Can not execute query");
    
    echo "<h2 style='color: white;margin: 0px 60px'>Record inserted:</h2><br><p style='color: white;margin: 0px 60px'>
	Qualification Length = $dql <br> Doctor's Degree = $dd <br> Doctor's Institution = $di <br> Doctor's Id = $did</p>";
        
    echo "<br><p style='margin: 0px 60px'><a href=qualifications_read.php><button class='ui inverted green button' type='submit'>Read All Records</button></a></p>";

?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>