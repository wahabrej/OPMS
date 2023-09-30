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
	$cd  = $_GET["cd"];
	$id = $_GET["id"];
	$dc = $_GET["dc"];
   
?>
<h1 style="text-align:center"><u>Update Record</u></h1>


<form class="ui form" style="max-width: 500px;margin: 0 auto;"  method=get action=carry_update_result.php>
  <div class="field">
    <label >Carrying Days:</label>
    <input type=text name="cd" value='<?php echo $cd; ?>'>
  </div>
  <div class="field">
    <label >Patient's ID:</label>
    <input type=text name="id" value='<?php echo $id; ?>'>
  </div>
    <div class="field">
    <label >Diseases Code:</label>
    <input type=text name="dc" value='<?php echo $dc; ?>'>
  </div>
  
  <button class="ui inverted sky blue button" type="submit">Update</button>
</form>
<br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>