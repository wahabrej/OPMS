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
}</style>  
        
<h1 style="text-align:center;color: white">Qualification's Record</h1>
       
<form class="ui form" style="max-width: 500px; margin: 0 auto" method=get action=qualifications_result.php>
  
    <div class="field">
    <label style='color: white'>Qualification Length</label>
    <input type=text name="Doc_Q_length" placeholder="Enter Length">
  </div>
    
    <div class="field">
    <label style='color: white'>Doctor's Degree</label>
    <input type=text name="Doc_Degree" placeholder="Enter Degree">
  </div>
  
    <div class="field">
    <label style='color: white'>Doctor's Institution</label>
    <input type=text name="Doc_Institution" placeholder="Enter Institution">
  </div>
  
    <div class="field">
    <label style='color: white'>Doctor's Id</label>
    <input type=text name="Doctor_id" placeholder="Enter ID">
  </div>
  
  <button class="ui inverted white button" type="submit">ADD Qualification</button>    
</form>
         <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui green button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui green button'>Log Out?</button></a>
</body>
</html>