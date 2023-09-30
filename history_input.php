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

<h1 style="text-align:center;color:white">History Input</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=history_result.php>
  <div class="field">
    <label style=" color:white">Remarks</label>
    <input type=text name="Remarks" placeholder="Enter Remark">
  </div>
  <div class="field">
    <label style=" color:white">Visiting Date</label>
    <input type=text name="V_Date" placeholder="Enter Visiting Date">
  </div>
    <div class="field">
    <label style=" color:white">Visiting Month</label>
    <input type=text name="V_Month" placeholder="Enter Visiting Month">
  </div>
  <div class="field">
    <label style=" color:white">Visiting Year</label>
    <input type=text name="V_Year" placeholder="Enter Visiting Year">
  </div>
   <div class="field">
    <label style=" color:white">Patient's ID</label>
    <input type=text name="Patient_id" placeholder="Enter Patient Id">
  </div>
  <div class="field">
    <label style=" color:white">Payment's ID</label>
    <input type=text name="Payment_id" placeholder="Enter Payment Id">
  </div>
  

 <br><button class="ui inverted sky blue button" type="submit">ADD DISEASES DETAILS</button>
</form>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
</body>
</html>