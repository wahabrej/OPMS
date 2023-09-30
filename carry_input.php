<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
  <style>body {
 background-image: url('spider.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}</style> 
<h1 style="text-align:center;color:white">Diseases Carrying Record</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=carry_result.php>
  <div class="field">
    <label style=" color:white">Carrying Days:</label>
    <input type=text name="C_Days" placeholder="Enter Carry day">
  </div>
  <div class="field">
    <label style=" color:white">Patient's ID:</label>
    <input type=text name="Patient_id" placeholder="Enter Patient Id">
  </div>
    <div class="field">
    <label style=" color:white">Diseases Code:</label>
    <input type=text name="Diseases_Code" placeholder="Enter Diseases Code">
  </div>
  
  <button class="ui black button" type="submit">ADD DISEASES CARRING DETAILS</button>
  </form>
 <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>