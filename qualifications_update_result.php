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
	$dol  = $_GET["dol"];
	$dd = $_GET["dd"];
	$di = $_GET["di"];
    $id = $_GET["id"];
	$did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE qualifications SET Doc_Q_length='$dol', Doc_Degree='$dd', Doc_Institution='$di', Doctor_id='$did' WHERE Qua_ID = $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px;color:white'>Record updated:</h3><br><p style='margin: 0px 60px;color: white'>Qualification Length = $dol <br> Doctor's Degree = $dd <br> Doctor's Institution = $di <br> Doctor's ID = $did</p>";
        
    echo "<br><br><p style='margin: 0px 60px'><a href=qualifications_read.php><button class='ui inverted red button' type='submit'>Read All Records</button></a></p>";
?>
         <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>