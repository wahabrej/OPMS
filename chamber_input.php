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

 <h1 style="text-align:center; color:white">Chamber's Record</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=chamber_result.php>
  
    <div class="field">
    <label style=" color:white">Chamber's Rent</label>
    <input type=text name="Chamber_Rent" placeholder="Enter chamber_rent">
	
  </div>
  
    <div class="field">
    <label style=" color:white">Location:</label>
    <input type=text name="location" placeholder="Enter your location">
  </div>
    
    <div class="field">
    <label style=" color:white">  Available Time:</label>
    <input type=text name="Available_Time" placeholder="Enter time">
  </div>
  
    <div class="field">
    <label style=" color:white">	Telephone No</label>
    <input type=text name="Telephone_no" placeholder="Enter your telephone no">
  </div>
   
    <div class="field">
    <label style=" color:white">Doctor's ID:</label>
    <input type=text name="Doctor_id" placeholder="Enter doctor_id">
  </div>
  
    <div class="field">
    <label style=" color:white">Pa's ID</label>
    <input type=text name="PA_ID" placeholder="Enter patient Id">
  </div>

   <button class="ui orange button" type="submit">ADD Chamber DETAILS</button>
    
  </form>
    
        <br><a href="getin.php"><button style='margin: 0px 10px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a>   
        
        <a href="logout.php"><button style='margin: 0px 10px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
		
		 <a href="agg3.php"><button style='margin: 0px 10px;height:40px; width:100px' class='ui Lime button'>Agrigation 3</button></a>
		 
		  <a href="sub3.php"><button style='margin: 0px 5px;height:40px; width:100px' class='ui Lime button'>Sub Query 3</button></a>
</body>
</html>