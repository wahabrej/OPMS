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
	$cr  = $_GET["cr"];
	$id = $_GET["id"];
	$lo = $_GET["lo"];
    $at = $_GET["at"];
	$tn = $_GET["tn"];
	$di = $_GET["di"];
    $pi = $_GET["pi"];
   
?>

<h1 style="text-align:center">Update Record</h1>



<form class="ui form" style="max-width: 500px;margin: 0 auto;"  method=get action=chamber_update_result.php>
 <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>Chamber's Rent</label>
    <input type=text name="cr" value='<?php echo $cr; ?>'>
  </div>
  <div class="field">
    <label>Location</label>
    <input type=text name="lo" value='<?php echo $lo; ?>'>
  </div>
    <div class="field">
    <label> Available Time</label>
    <input type=text name="at" value='<?php echo $at; ?>'>
  </div>
  <div class="field">
    <label>Telephon No:</label>
    <input type=text name="tn" value='<?php echo $tn; ?>'>
  </div>
	  </div>
    <div class="field">
    <label> Doctor's ID:</label>
    <input type=text name="di" value='<?php echo $di; ?>'>
  </div>
  <div class="field">
    <label>PA's ID:</label>
    <input type=text name="pi" value='<?php echo $pi; ?>'>
  </div>

  <button class="ui inverted sky blue button" type="submit">Update</button>
</form>
  <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>