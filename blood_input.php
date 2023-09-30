
<html>
<head>
<title> website</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
</head>
<body>
  <style>body {
  background-image: url('spider.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}</style>

<h1 style="text-align:center; color:white">Blood Record</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=blood_result.php>
  <div class="field">
    <label style=" color:white">Blood Group:</label>
    <input ttype=text name="Blood_Group" placeholder="Enter blood group">
 </div>
  <div class="field">
    <label style=" color:white">Quantity Of Blood</label>
    <input type=text name="Quantity_Blood" placeholder="Enter blood quantity">
  </div>
    <div class="field">
    <label style=" color:white">Donation No</label>
    <input type=text name="Number_of_donations" placeholder="Enter Donatio No">
  </div>
  <div class="field">
    <label style=" color:white">Patient's ID</label>
    <input type=text name="Patient_id" placeholder="Enter patient Id">
  </div>
   

  <button class="ui orange button" type="submit">ADD BLOOD DETAILS</button>
  </form>
  <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
		
		<a href="sub4.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>SUB_QUERY 4</button></a>
</body>
</html>