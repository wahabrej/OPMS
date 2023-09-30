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
}</style> 
        
<h1 style="text-align:center">Diseases Record</h1>      
        
<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=diseases_result.php>
  
    <div class="field">
    <label style='color:red'>Diseases Name</label>
    <input input type=text name="Diseases_Name" placeholder="Enter Name">
  </div>
  
    <div class="field">
    <label style='color:red'>Diseases Symptom</label>
    <input input type=text name="Diseases_Symptom" placeholder="Enter Symptom">
  </div>
  
    <div class="field">
    <label style='color:red'>Doctor's ID</label>
    <input input type=text name="Doctor_id" placeholder="Enter ID">
  </div>
    
  <br><button class="ui inverted sky blue button" type="submit">ADD DISEASES DETAILS</button>
</form>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>