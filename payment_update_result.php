<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
         <style>body {
  background-image: url('final22.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
	$id = $_GET["id"];
    $pd = $_GET["pd"];
	$oa = $_GET["oa"];
	$na  = $_GET["na"];
	$tp = $_GET["tp"];
    $p = $_GET["p"];
	$up = $_GET["up"];
	$pt  = $_GET["pt"];
	$pi  = $_GET["pi"];


	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE payment SET Payment_Date='$pd', Old_Amount='$oa', New_Amount='$na',Total_Payment='$tp', Paid='$p', Unpaid='$up', Payment_Time='$pt', Patient_id='$pi' WHERE Payment_id= $id";
	//echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3 style='margin: 0px 60px'>Record updated:</h3><br><p style='margin: 0px 60px'> Payment's Date= $pd <br> Old Amount = $oa <br> New Amount= $na <br>  Total Payment= $tp <br> Paid = $p <br> Unpaid= $up <br> Payment Time = $pt <br> Patient's ID= $pi </p> ";

    echo "<br><p style='margin: 0px 60px'><a href=payment_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";	
?>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>