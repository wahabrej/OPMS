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
	$id  = $_GET["id"];
	$e = $_GET["e"];
	$dob = $_GET["dob"];
    $fn = $_GET["fn"];
	$mn = $_GET["mn"];
	$lm = $_GET["lm"];
    $pn = $_GET["pn"];
    $st = $_GET["st"];
    $c = $_GET["c"];
    $zc = $_GET["zc"];
    $sta = $_GET["sta"];
    $did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE patient SET Email='$e', DOB='$dob', First_Name='$fn', Middle_Name='$mn', Last_Name='$lm' , Patient_Number='$pn' , Street='$st',City='$c', Zip_Code='$zc', State='$sta' , Doctor_id='$did' WHERE Patient_id = $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'>Email = $e <br> DOB = $dob <br> First Name = $fn <br> Middle Name = $mn <br> Last Name = $lm <br> Patient's Number = $pn <br> Street = $st <br> City = $c <br> Zip Code = $zc <br> State = $sta <br> Doctor's ID = $did</p>";

    echo "<br><p style='margin: 0px 60px'><a href=patient_read.php>
    <button class='ui inverted purple button' type='submit'>Read All Records</button></a></p>";
?> 
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>
