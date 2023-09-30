<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
    
    <style>body {
  background-image: url('final11.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
	$bg  = $_GET["bg"];
	$qb = $_GET["qb"];
	$id = $_GET["id"];
    $nd = $_GET["nd"];
	$pi = $_GET["pi"];
	
   
?>

<h1 style="text-align:center">Update Record</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=blood_update_result.php>
  <div class="field">
    <label>Blood Group:</label>
    <input type=text name="bg" value='<?php echo $bg; ?>'>
  </div>
  <div class="field">
    <label>Quantity Of Blood</label>
    <input type=text name="qb" value='<?php echo $qb; ?>'>
  </div>
  <input type=hidden name=id value='<?php echo $id; ?>'> <br>
    <div class="field">
    <label>Donation No</label>
    <input type=text name="nd" value='<?php echo $nd; ?>'>
  </div>
  <div class="field">
    <label>Patient's ID</label>
    <input type=text name="pi" value='<?php echo $pi; ?>'>
  </div>
   

  <button class="ui orange button" type="submit">ADD BLOOD DETAILS</button>
  </from>
  <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>