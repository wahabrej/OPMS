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
	
	$r = $_GET["r"];
    $vd = $_GET["vd"];
	$vm = $_GET["vm"];
	$vy  = $_GET["vy"];
	$id = $_GET["id"];
    $pi = $_GET["pi"];
	$pai = $_GET["pai"];


?>

<h1 style="text-align:center; color:white"><u>Update Record</u></h1>


<form class="ui form" style="max-width: 500px;margin: 0 auto;"  method=get action=history_update_result.php>
  <div class="field">
    <label style="color:white">Remarks:</label>
    <input type=text name="r" value='<?php echo $r; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Visiting Date:</label>
    <input type=text name="vd" value='<?php echo $vd; ?>'>
  </div>
    <div class="field">
    <label style="color:white">Visiting Month:</label>
    <input type=text name="vm" value='<?php echo $vm; ?>'>
  </div>
  <div class="field">
    <label style="color:white">Visiting Year:</label>
    <input type=text name="vy" value='<?php echo $vy; ?>'>
  </div>

    <input type=hidden name="id" value='<?php echo $id; ?>'>
  
   <div class="field">
    <label style="color:white">Patient's ID:</label>
    <input type=text name="pi" value='<?php echo $pi; ?>'>
  </div>
  <div class="field">
    <label style="color:white"> Payment's ID:</label>
    <input type=text name="pai" value='<?php echo $pai; ?>'>
  </div>
  

  <button class="ui inverted sky blue button" type="submit">Update</button>
</form>
    <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>