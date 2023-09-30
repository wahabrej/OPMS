<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
<body>
    <style>body {
  background-image: url('hh.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>
<?php
	$id  = $_GET["id"];
	$e = $_GET["e"];
	$dob = $_GET["dob"];
    $fn = $_GET["fn"];
	$mn = $_GET["mn"];
	$lm = $_GET["lm"];
    $pn = $_GET["pn"];
    $st = $_GET["st"];
    $c = $_GET["c"];
    $zc = $_GET["zc"];
    $sta = $_GET["sta"];
    $did = $_GET["did"];
?>

<h1 style="text-align:center">Update Record</h1>
        
<form class="ui form" style="max-width: 500px; margin: 0 auto;" method=get action=patient_update_result.php>
  
    <input type=hidden name=id value='<?php echo $id; ?>'> <br>
  
    <div class="field">
    <label>Email</label>
    <input type=text name="e" value='<?php echo $e; ?>'>
  </div>
  
    <div class="field">
    <label>DOB</label>
    <input type=text name="dob" value='<?php echo $dob; ?>'>
  </div>
  
    <div class="field">
    <label>First Name</label>
    <input type=text name="fn" value='<?php echo $fn; ?>'>
  </div>
  
    <div class="field">
    <label>Middle Name</label>
    <input type=text name="mn" value='<?php echo $mn; ?>'>
  </div>
    
    <div class="field">
    <label>Last Name</label>
    <input type=text name="lm" value='<?php echo $lm; ?>'>
  </div>
  
    <div class="field">
    <label>Patient's Number</label>
    <input type=text name="pn" value='<?php echo $pn; ?>'>
  </div>
    
    <div class="field">
    <label>Street</label>
    <input type=text name="st" value='<?php echo $st; ?>'>
  </div>
    
    <div class="field">
    <label>City</label>
    <input type=text name="c" value='<?php echo $c; ?>'>
  </div>
    
    <div class="field">
    <label>Zip Code</label>
    <input type=text name="zc" value='<?php echo $zc; ?>'>
  </div>
  <div class="field">
    
      <label>State</label>
    <input type=text name="sta" value='<?php echo $sta; ?>'>
  </div>
    
    <div class="field">
    <label>Doctor's ID</label>
    <input type=text name="did" value='<?php echo $did; ?>'>
  </div>
  
  <button class="ui inverted blue button" type="submit">Update</button>
</form>
    <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>