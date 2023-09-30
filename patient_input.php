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
        
<h1 style="text-align:center">Patient's Record</h1>
        
<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=patient_result.php>
  
    <div class="field">
    <label>Email</label>
    <input type=text name="Email" placeholder="Enter Email">
  </div>
  
    <div class="field">
    <label>DOB</label>
    <input input type=text name="DOB" placeholder="Enter DOB">
  </div>
  
    <div class="field">
    <label>First Name</label>
    <input input type=text name="First_Name" placeholder="Enter First Name">
  </div>
  
    <div class="field">
    <label>Middle Name</label>
    <input input type=text name="Middle_Name" placeholder="Enter Middle Name">
  </div>
  
    <div class="field">
    <label>Last Name</label>
    <input input type=text name="Last_Name" placeholder="Enter Last Name">
  </div>
  
    <div class="field">
    <label>Patient's Number</label>
    <input input type=text name="Patient_Number" placeholder="Enter Number">
  </div>
  
    <div class="field">
    <label>Street</label>
    <input input type=text name="Street" placeholder="Enter Street">
  </div>
    
    <div class="field">
    <label>City</label>
    <input input type=text name="City" placeholder="Enter City">
  </div>
  
    <div class="field">
    <label>Zip Code</label>
    <input type=text name="Zip_Code"placeholder="Enter Code">
  </div>
    
    <div class="field">
    <label>State</label>
    <input input type=text name="State" placeholder="Enter State">
  </div>
    
    <div class="field">
    <label>Doctor's ID</label>
    <input input type=text name="Doctor_id" placeholder="Enter id">
  </div>
  
  <button class="ui INVERTED orange button" type="submit">ADD PATIENT'S DETAILS</button>
</form>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
        
         <a href="sq2.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Sub Query 2</button></a>
        
        
</body>
</html>