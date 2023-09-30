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
    $dir = $_GET["dir"];
	$me = $_GET["me"];
	$d  = $_GET["d"];
	$di = $_GET["di"];
    $pi = $_GET["pi"];


?>
<h1 style="text-align:center"><u>Update Record</u></h1>


<form class="ui form" style="max-width: 500px;margin: 0 auto;"  method=get action=prescription_update_result.php>
 <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label>Direction</label>
    <input type=text name="dir" value='<?php echo $dir; ?>'>
  </div>
  <div class="field">
    <label>Medicine:</label>
    <input type=text name="me" value='<?php echo $me; ?>'>
  </div>
    <div class="field">
    <label> Dose:</label>
    <input type=text name="d" value='<?php echo $d; ?>'>
  </div>
  <div class="field">
    <label>Doctor's ID</label>
    <input type=text name="di" value='<?php echo $di; ?>'>
  </div>
	  </div>
    <div class="field">
    <label> Patient's Id:</label>
    <input type=text name="pi" value='<?php echo $pi; ?>'>
  </div>
  

  <button class="ui inverted sky blue button" type="submit">Update</button>
</form>
    <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>