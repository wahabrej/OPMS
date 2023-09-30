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
	
	$id = $_GET["id"];
    $pd = $_GET["pd"];
	$oa = $_GET["oa"];
	$na  = $_GET["na"];
	$tp = $_GET["tp"];
    $p = $_GET["p"];
	$up = $_GET["up"];
	$pt  = $_GET["pt"];
	$pi  = $_GET["pi"];

?>
<h1 style="text-align:center"><u>Update Record</u></h1>



<form class="ui form" style="max-width: 500px;margin: 0 auto;"  method=get action=payment_update_result.php>
 <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>Payment's Date:</label>
    <input type=text name="pd" value='<?php echo $pd; ?>'>
  </div>
  <div class="field">
    <label>Old Amount:</label>
    <input type=text name="oa" value='<?php echo $oa; ?>'>
  </div>
    <div class="field">
    <label> New Amount:</label>
    <input type=text name="na" value='<?php echo $na; ?>'>
  </div>
  <div class="field">
    <label>Total Payment:</label>
    <input type=text name="tp" value='<?php echo $tp; ?>'>
  </div>
	  </div>
    <div class="field">
    <label> Paid:</label>
    <input type=text name="p" value='<?php echo $p; ?>'>
  </div>
  <div class="field">
    <label>Unpaid:</label>
    <input type=text name="up" value='<?php echo $up; ?>'>
  </div>

  
   <div class="field">
    <label>Payment Time:</label>
    <input type=text name="pt" value='<?php echo $pt; ?>'>
  </div>
  <div class="field">
    <label> Payment's ID:</label>
    <input type=text name="pi" value='<?php echo $pi; ?>'>
  </div>
  
  <button class="ui inverted sky blue button" type="submit">Update</button>
</form>
    <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>