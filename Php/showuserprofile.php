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
		
          
          <li><a href="userprofile.php"> DONATE</a></li>
          <li><a href="showdonation.php"> SHOW DONATION</a></li>
          <li><a id="fisrtlist">PROFILE</a></li>
          <li><a href="usersettings.php">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	    
		<div class="profile-box">
		<br>
		<br>
		
		<table class="center">     
            
        <?php
        $data=array();
         
        $type="user";
        require("mysql_functions.php");
        $sql="select * from user_profile where user_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		
		foreach($data as $v){
	    ?>
		
		 <tr>
              <td>
			  
                 <img src="<?php echo $v["user_pic"]; ?>" style="width:250px;height:250px;">
				 
				
              </td>
		 </tr>
		
		 <tr>
              <td>
			      
			      <br>
                 <h2 style="color:white; ">Name: <?php echo $v["user_name"]; ?></h2>
				 <br>
				
              </td>
		 </tr>
		 
		 <tr>
              <td>
			  
                 <h2 style="color:white;">Email: <?php echo $v["user_email"]; ?></h2>
				 <br>
				
              </td>
		 </tr>
		 
		 <tr>
              <td>
			  
                 <h2 style="color:white;">Phone: <?php echo $v["user_phone"]; ?></h2>
				
              </td>
		 </tr>
	   
	    
        <?php	    
	
        }

        ?>
		
		</table>
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