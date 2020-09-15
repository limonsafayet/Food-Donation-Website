<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Show Donate Money</title>
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
	    require("mysql_functions.php");
        $sql="select * from user_money_donation where user_email= '".$_SESSION["name"]."' ";
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
			?>
			<br>
			<br>
			<table border=1  class="center">
            <tr>
              <th><h2 style="color:white">Amount</h2></th>
              <th><h2 style="color:white">Date</h2></th> 
    
            </tr>
			<?php
			foreach($data as $v){
				?>
				<tr>

                <th><p style="color:white"><?php echo $v["money_amount"]; ?></p></th>
                <th><p style="color:white"><?php echo $v["money_ddate"]; ?></p></th>
				</tr>
				<?php
				 $a=(int)$v["money_amount"];
	 
	             $total=$a+$total;
			}
			?>
			 </table>
			
			<div class="hometext">
		    
		    <h2>Total donate amount:<?php echo $total ?></h2>
		    <button id="buttonone" onclick="window.location.href='showdonation.php'"> Go Back </button>
		 
		    </div>
			<?php
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