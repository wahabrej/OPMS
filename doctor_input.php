<html>
	<head>
		<title>OPMS</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
        
    <style>body {
  background-image: url('do.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}</style>  
        
<h1 style="text-align:center">DOCTOR's RECORD</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=doctor_result.php>
  
    <div class="field">
    <label>First Name</label>
    <input type=text name="First_Name" placeholder="Enter First Name">
  </div>
  
    <div class="field">
    <label>Middle Name</label>
    <input type=text name="Middle_Name" placeholder="Enter Middle Name">
  </div>
  
    <div class="field">
    <label>Last Name</label>
    <input type=text name="Last_Name" placeholder="Enter Last Name">
  </div>
  
    <div class="field">
    <label>Age</label>
    <input type=text name="Age" placeholder="Enter Age">
  </div>
  
    <div class="field">
    <label>Doctor's Number</label>
    <input type=text name="Doctor_Number" placeholder="Enter Doctor's Number">
  </div>
  
    <div class="field">
    <label>Doctor's Email</label>
    <input type=text name="Doctor_Email" placeholder="Enter Doctor's Email">
  </div>
  
    <div class="field">
    <label>Joining Date</label>
    <input type=text name="Joining_Date" placeholder="Enter Joining Date">
  </div>
  
  <button class="ui inverted orange button" type="submit">ADD DOCTOR'S DETAILS</button>
    
</form>
    
         <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
        
         <a href="join2.php"><button style='margin: 0px 60px;height:50px; width:120px' class='ui Lime button'>Join Query 2</button></a>
        
          <a href="agg2.php"><button style='margin: 0px 60px;height:50px; width:120px' class='ui Lime button'>Aggregation 2</button></a>
        
        <a href="join1.php"><button style='margin: 0px 60px;height:50px; width:120px' class='ui Lime button'>Join Query 1</button></a>
</body>
</html>