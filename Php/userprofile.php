<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>User profile</title>
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
		
          
          <li><a id="fisrtlist"> DONATE</a></li>
          <li><a href="showdonation.php"> SHOW DONATION</a></li>
          <li><a href="showuserprofile.php">PROFILE</a></li>
          <li><a href="usersettings.php">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	    
		<div class="hometext">
			
			<h2> WELCOME TO DONATION BOX</h2><br>
		<?php
        $data=array();
         
        $type="user";
        require("mysql_functions.php");
        $sql="select * from user_profile where user_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		
		foreach($data as $v){
	    ?>
	    <h2> <?php echo $v["user_name"]; ?></h2>
        <?php	    
	
        }

        ?>
			
			<button id="buttonone" onclick="window.location.href='addfoodform.php'"> Donate Food </button>
			<button id="buttonone" onclick="window.location.href='addmoneyform.php'"> Donate Money </button>
			
			
		</div>
	
		
</div>
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>