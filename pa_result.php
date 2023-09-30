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
	$sa = $_GET["Salary"];
	$ep = $_GET["Email_PA"];
    $sn = $_GET["Start_Name"];
	$en = $_GET["End_Name"];
    $pn = $_GET["PA_Number"];
	$st = $_GET["Street"];
    $zc = $_GET["Zip_Code"];
    $c = $_GET["City"];
    $doi = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO pa VALUES ($sa, '$ep','$sn','$en','$pn','$st','$zc','$c',NULL,$doi)")
		or die("Can not execute query");

	echo "<h2 style='margin: 0px 60px'>Record inserted:</h2><br><p style='margin: 0px 60px'>Salary = $sa <br> Email PA = $ep <br> Start Name = $sn <br> End Name = $en <br> PA Number = $pn <br> Street = $st <br> Zip Code = $zc <br> City = $c <br> Doctor ID = $doi</p>";
        
echo "<br><p style='margin: 0px 60px'><a href=pa_read.php><button class='ui inverted green button' type='submit'>Read All Records</button></a></p>";
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>