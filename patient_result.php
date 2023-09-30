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
	$e = $_GET["Email"];
    $dob = $_GET["DOB"];
    $fn = $_GET["First_Name"];
	$mn = $_GET["Middle_Name"];
    $ln = $_GET["Last_Name"];
    $pn = $_GET["Patient_Number"];
	$st = $_GET["Street"];
    $c = $_GET["City"];
    $zc = $_GET["Zip_Code"];
    $sta = $_GET["State"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO patient VALUES ( NULL,'$e', '$dob','$fn','$mn','$ln','$pn','$st','$c','$zc','$sta',$did)")
		or die("Can not execute query");

	echo "<h2 style='margin: 0px 60px'>Record inserted:</h2><br><p style='margin: 0px 60px'>Email = $e <br> DOB = $dob <br> First Name = $fn <br> Middle Name = $mn <br> Last Name = $ln <br> Patient's Number = $pn <br> Street = $st <br> City = $c <br> Zip Code = $zc <br> State = $sta <br> Doctor's ID = $did</p>";

    echo "<br><p style='margin: 0px 60px'><a href=patient_read.php><button class='ui inverted green button' type='submit'>Read All Records</button></a></p>";
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>