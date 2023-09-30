<html>
	<head>
		<title>Doctor's Information</title>
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
	$Qua_ID = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM qualifications WHERE Qua_ID=$Qua_ID" )
		or die("Can not execute query");
        
    echo "<h3 style='margin: 0px 60px;color:white'>Record Deleted!<br><br></h3";

	echo "<br><p><a href=qualifications_read.php><button class='ui inverted blue button' type='submit'>Read All Records</button></a></p>";
?>
         <br><a href="getin.php"><button style='margin: 0px 0px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 40px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>