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

<h1 style="text-align:center;color:white">Payment Input</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=payment_result.php>
  <div class="field">
    <label style=" color:white">Payment's Date</label>
    <input type=text name="Payment_Date" placeholder="Enter Payment Date">
  </div>
  <div class="field">
    <label style=" color:white">Old Amount</label>
    <input type=text name="Old_Amount" placeholder="Enter Old Amount">
  </div>
    <div class="field">
    <label style=" color:white">  New Amount</label>
    <input type=text name="New_Amount" placeholder="Enter New Amount">
  </div>
  <div class="field">
    <label style=" color:white">	Total Payment</label>
    <input type=text name="Total_Payment" placeholder="Enter Total Payment">
  </div>
   <div class="field">
    <label style=" color:white">Paid</label>
    <input type=text name="Paid" placeholder="Enter Paid Amount">
  </div>
  <div class="field">
    <label style=" color:white">Unpaid</label>
    <input type=text name="Unpaid" placeholder="Enter Unpaid Amount">
  </div>
    <div class="field">
    <label style=" color:white">Payment Time</label>
    <input type=text name="Payment_Time" placeholder="Enter Payment Time">
  </div>
  <div class="field">
    <label style=" color:white">Patient's ID</label>
    <input type=text name="Patient_id" placeholder="Enter Patient Id">
  </div>

  <br><button class="ui inverted sky blue button" type="submit">ADD Payment DETAILS</button>
</form>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
		
		 <a href="join3.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>JOIN Query 3</button></a>
</body>
</html>