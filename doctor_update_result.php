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
	$fname = $_GET["fname"];
	$mname = $_GET["mname"];
    $lname = $_GET["lname"];
	$age = $_GET["age"];
	$dno = $_GET["dno"];
    $dem = $_GET["dem"];
    $jdate = $_GET["jdate"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE doctor SET First_Name='$fname', Middle_Name='$mname', Last_Name='$lname', Age='$age', Doctor_Number='$dno' , Doctor_Email='$dem' , Joining_Date='$jdate' WHERE Doctor_id = $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'>First Name = $fname <br> Middle Name = $mname <br> Last Name = $lname <br> Age = $age <br> Doctor's Number = $dno <br> Doctor's Email = $dem <br> Joining Date = $jdate</p>";

	echo "<br><p style='margin: 0px 60px'><a href=doctor_read.php><button class='ui inverted green button' type='submit'>Read All Records</button></a></p>";
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>