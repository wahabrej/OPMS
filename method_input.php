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

 <h1 style="text-align:center; color:white">Method Record</h1>

<form class="ui form" style="max-width: 500px; margin: 0 auto;"  method=get action=method_result.php>
  <div class="field">
    <label  style=" color:white">Method Process: </label>
    <input type=text name="Method_Process" placeholder="Enter Method Process">
  </div>
  <div class="field">
    <label  style=" color:white">Method Used For</label>
    <input type=text name="Method_Used_for" placeholder="Enter Method used For">
  </div>
    <div class="field">
    <label  style=" color:white">Payment's ID</label>
    <input type=text name="Payment_id" placeholder="Enter Payment Id">
  </div>
  
  <br><button class="ui inverted sky blue button" type="submit">ADD DISEASES Method</button>
</form>
        <br><a href="getin.php"><button style='margin: 0px 60px;height:50px; width:120px'class="ui Magenta button">Homepage?</button></a> 
        
        <a href="logout.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Log Out?</button></a>
		
		
		<a href="agg4.php"><button style='margin: 0px 60px;height:40px; width:100px' class='ui Lime button'>Agrigation Query 4</button></a>
</body>
</html>