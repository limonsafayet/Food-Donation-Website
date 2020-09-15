<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Show Donate Food</title>
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
          <li><a id="fisrtlist"> SHOW DONATION</a></li>
          <li><a a href="showuserprofile.php">PROFILE</a></li>
          <li><a href="usersettings.php">SETTINGS</a></li>
          <li><a href="logout.php"> LOGOUT </a></li>
        </ul>
      </div>

    </div>
	
	   <?php
	    $total=0;
		$a=1;
	    require("mysql_functions.php");
        $sql="select * from user_food_donation where user_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		if (empty($data)) {
        ?>
		
		
		
	    <div class="hometext">
		<h2> You have not donate yet </h2><br><br>
		
		<button id="buttonone" onclick="window.location.href='showdonation.php'"> Go Back </button>
		
		</div>
													
		
		
		<?php
        }
		else{
			
			$u="r";
			?>
			<br>
			<br>
			<table border=1  class="center">
            <tr>
			    <th>Food Name</th>
				<th>Food Type</th> 
				<th>Quantity</th> 
				<th>Quantity Type</th> 
				<th>Donation Date</th> 
				<th>Expiry Date</th> 
				<th>Location</th>
				<th>Picture</th>
    
            </tr>
			<?php
			foreach($data as $v)
			{
				
				
				if($v["food_validation_type"]==$u){
					$total=$total+$a;
					?>
					<tr>

                    <th><p style="color:white"><?php echo $v["food_name"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["food_type"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["food_quantity"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["food_quantity_a"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["food_ddate"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["food_edate"]; ?></p></th>
                    <th><p style="color:white"><?php echo $v["food_location"]; ?></p></th>
                    <th><img src="<?php echo $v["food_pic"]; ?>" style="width:50px;height:50px;"></th>
					
				    </tr>
					<?php
					
				}
			}
			?>
			</table>
			<?php
			
			if($total==0)
			{
				header('Location: notyet.php');
				
			}
			
		}
	   
	   ?>
	
        
		 
		 
</div>
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>