<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>User Settings</title>
<link rel="stylesheet" type="text/css" href="../css/userprofilestyle.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

</head>
<body>

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
	    <br>
	    <br>
	    <br>
	    <br>
	    <p style="text-align:center">
		<button id="buttontwo" onclick="window.location.href='userpasschange.php'"> Change password </button><br><br>
		<button id="buttontwo" onclick="window.location.href='userpicchange.php'"> Change profile picture </button><br><br>
		<button id="buttontwo" onclick="window.location.href='userphonechange.php'"> Change phone number </button>
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