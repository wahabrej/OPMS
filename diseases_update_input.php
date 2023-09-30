<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
    
    <style>body {
  background-image: url('ji.png');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
    
<?php
	$dn  = $_GET["dn"];
	$id = $_GET["id"];
	$ds = $_GET["ds"];
    $did = $_GET["did"];
?>

<h1 style="text-align:center">Update Record</h1>
        
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=diseases_update_result.php>
  <div class="field">
    <label>Diseases Name</label>
    <input input type=text name="dn" value='<?php echo $dn; ?>'>
  </div>
    <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>Diseases Symptom</label>
    <input input type=text name="ds" value='<?php echo $ds; ?>'>
  </div>
  <div class="field">
    <label>Doctor's ID</label>
    <input input type=text name="did" value='<?php echo $did; ?>'>
  </div>
  
  <button class="ui inverted sky blue button" type="submit">Update</button>
</form>
    <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>