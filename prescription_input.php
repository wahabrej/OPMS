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
<h1 style="text-align:center;color:white">Presciption's Record</h1>



<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=prescription_result.php>
  <div class="field">
    <label style=" color:white">Direction:</label>
    <input type=text name="Direction" placeholder="Enter Direction">
  </div>
  <div class="field">
    <label style=" color:white">Medicine:</label>
    <input type=text name="Medicine" placeholder="Enter Medicine Name">
  </div>
    <div class="field">
    <label style=" color:white">Dose:</label>
    <input type=text name="Dose" placeholder="Enter Medicine Dose">
  </div>
  <div class="field">
    <label style=" color:white" >	Doctor's ID</label>
    <input type=text name="Doctor_id" placeholder="Enter Doctor Id">
  </div>
   <div class="field">
    <label style=" color:white">Patient's Id</label>
    <input type=text name="Patient_id" placeholder="Enter Patient Id">
  </div>

  <br><button class="ui inverted sky blue button" type="submit">ADD Presciption DETAILS</button>
</form>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
		
		<a href="join4.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>JOIN Query 4</button></a>
</body>
</html>