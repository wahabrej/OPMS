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
	$cr = $_GET["Chamber_Rent"];
	$l = $_GET["location"];
    $at = $_GET["Available_Time"];
	$tn = $_GET["Telephone_no"];
    $did = $_GET["Doctor_id"];
	$pid = $_GET["PA_ID"];
  
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO chamber VALUES ( $cr,NULL, '$l','$at','$tn',$did,$pid)")
		or die("Can not execute query");

	echo  "<h3 style='margin: 0px 60px'>Record inserted:</h3><br><p style='margin: 0px 60px'>Chamber's Rent = $cr <br> Location = $l <br> Available Time = $at <br> Telephone No = $tn <br> Doctor's ID = $did <br> PA's ID = $pid";

	 echo "<br><p style='margin: 0px 60px'><a href=chamber_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";
?>
<br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>