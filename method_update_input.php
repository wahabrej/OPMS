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
    $mp = $_GET["mp"];
	$mu = $_GET["mu"];
	$pi  = $_GET["pi"];

?>

<h1 style="text-align:center"><u>Update Record</u></h1>

<h1></h1>


<form class="ui form" style="max-width: 500px;margin: 0 auto;"  method=get action=method_update_result.php>
 <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  <div class="field">
    <label >Method Process:</label>
    <input type=text name="mp" value='<?php echo $mp; ?>'>
  </div>
  <div class="field">
    <label>Method Used For:</label>
    <input type=text name="mu" value='<?php echo $mu; ?>'>
  </div>
    <div class="field">
    <label>Payment's ID:</label>
    <input type=text name="pi" value='<?php echo $pi; ?>'>
  </div>


  <button class="ui inverted sky blue button" type="submit">Update</button>
</form>
    <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>