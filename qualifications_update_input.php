<html>
	<head>
		<title>OPMS</title>
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
	$dol  = $_GET["dol"];
	$dd = $_GET["dd"];
	$di = $_GET["di"];
    $id = $_GET["id"];
	$did = $_GET["did"];
	
?>

<h1 style='text-align:center;color: white'>Update Record</h1>
      
 <form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=qualifications_update_result.php>

  <div class="field">
    <label style='color: white'>Qualification Length</label>
    <input type=text name="dol" value='<?php echo $dol; ?>'>
  </div>
  
     <div class="field">
    <label style='color: white'>Doctor's Degree</label>
    <input type=text name="dd" value='<?php echo $dd; ?>'>
  </div>
  
     <div class="field">
    <label style='color: white'>Doctor's Institution</label>
    <input type=text name="di" value='<?php echo $di; ?>'>
  </div>

     <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  
     <div class="field">
    <label style='color: white'>Doctor's ID</label>
    <input type=text name="did" value='<?php echo $did; ?>'>
  </div>
     
  <br><button class="ui inverted green button" type="submit">Update</button>       
</form>
    <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>