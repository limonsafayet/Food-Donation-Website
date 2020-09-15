<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
?>
<!DOCTYPE html>
<html>
<head>
<title>Pic Change</title>
<link rel="stylesheet" type="text/css" href="../css/userprofilestyle.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

</head>
<body>

<script src="../Javascript/piccheck.js">


</script>

<div class="bgimage">

    <div class="menu">
      
      <div class="leftmenu">
        <h4> Donation Box </h4>
      </div>

      <div class="rightmenu">
        <ul>
		
          
          <li><a href="userprofile.php"> DONATE</a></li>
          <li><a href="showdonation.php"> SHOW DONATION</a></li>
          <li><a href="showuserprofile.php">PROFILE</a></li>
          <li><a id="fisrtlist">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	
	    <form method="post" action="userpicchangevalidation.php" enctype="multipart/form-data" name="fm">
	    <br>
	    <br>
	    <br>
	    <br>
	    <table class="center">     
            <tr>
              <td>
			  
                <h2 style="color:white; ">Enter Password</h2>
                <input type="password" name="pass" placeholder="Enter Password">
				<p id="passErr" style="color:red;font-size:15px"></p>
				
              </td>
            </tr>
			
			<tr>
              <td>
			  
                <h2 style="color:white; ">Select Picture To Upload</h2><br>
				<input type="file" name="fileToUpload">
                
				<p id="picErr" style="color:red;font-size:15px"></p>
              </td>
            </tr>
			
			<tr>
              <td>
			  
                </br>
                <p style="text-align:center">
                <input type="submit" name="submit" onclick="return check_validation();" value="Change">
                </p>
              </td>
            </tr>
			
			
			
		</table>
	</form>
	     
				<p style="text-align:center">
                <button id="buttonone" onclick="window.location.href='usersettings.php'"> Cancel </button>
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