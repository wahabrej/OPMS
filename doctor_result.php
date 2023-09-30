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
	$fn = $_GET["First_Name"];
	$mn = $_GET["Middle_Name"];
    $ln = $_GET["Last_Name"];
	$age = $_GET["Age"];
    $dn = $_GET["Doctor_Number"];
	$de = $_GET["Doctor_Email"];
    $jd = $_GET["Joining_Date"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO doctor VALUES ( NULL, '$fn', '$mn','$ln','$age','$dn','$de','$jd')")
		or die("Can not execute query");

	echo "<h2 style='margin: 0px 60px'>Record inserted:</h2><br><p style='margin: 0px 60px'>First Name = $fn <br> Middle Name = $mn <br> Last Name = $ln <br> Age = $age <br> Doctor's Number = $dn <br> Doctor's Email = $de <br> Joining Date = $jd</p>";

	echo "<br><p style='margin: 0px 60px'><a href=doctor_read.php><button class='ui inverted green button' type='submit'>Read All Records</button></a></p>";
?>
      <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>