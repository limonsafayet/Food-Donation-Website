<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Donate Money</title>
<link rel="stylesheet" type="text/css" href="../css/food.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

</head>
<body>

<script src="../Javascript/addmoney.js">



</script>

<div class="bgimage">

    <div class="menu">
      
      <div class="leftmenu">
        <h4> Donation Box </h4>
      </div>

      <div class="rightmenu">
        <ul>
		
          
          <li><a id="fisrtlist"> DONATE</a></li>
          <li><a href="showdonation.php"> SHOW DONATION</a></li>
          <li><a href="showuserprofile.php">PROFILE</a></li>
          <li><a href="usersettings.php">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	    
		
		<form method="post" action="addmoneyvalidation.php" name="fm">
 	    <br>
		<br>
        <table class="center">     
            <tr>
              <td>
			  
                <h2 style="color:white">Enter Your Amount*</h2>
                <input type="text" name="amount" placeholder="Enter Amount">
				<p id="amountErr" style="color:red;font-size:13px"></p>
				
              </td>
            </tr>
      
            
			
			<tr>
              <td>
			  
                <h2 style="color:white">Enter Password*</h2>
                <input type="password" name="pass" placeholder="Enter Password">
				<p id="passErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
			
			
            
                       
            <tr>
              <td>
			  
                
                <p style="text-align:center">
                <input type="submit" name="submit" onclick="return check_validation();" value="Submit">
                </p>
              </td>
            </tr>
			
			
			
		</table>
		</form>
		
		         <p style="text-align:center">
		         <button id="buttonone" onclick="window.location.href='userprofile.php'"> Cancel </button>
				 </p>
		
		         
		
		
	        

			
</div>
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>









          
          
          
         