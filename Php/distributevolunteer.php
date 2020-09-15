<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	
$data1=array();
require("mysql_functions.php");

 $status="active";
    
    $sql="select * from volunteer_profile where v_status= '".$status."' ";
    loadFromVolunteerMySQLV($sql);

?>
<html>
<head>

</head>
<body>
<script src="../Javascript/locationload.js">

</script>

<script>

	function validation(){
	document.getElementById('fnameErr').innerHTML = " ";
	if(document.fm.fid.value.length <=0){
	    document.getElementById('fnameErr').innerHTML = "Food name can't be empty!";
		return false;
	   }
	}

</script>


<table border=1 align="center">
  <tr>
                <th>Food ID</th>
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

	$data=array(); 
    $status="un";
    
    $sql="select * from user_food_donation where food_validation_type= '".$status."' ";
    loadFromMySQL($sql);
	foreach($data as $v){
	?>
	   
	<tr>

                    <th><p ><?php echo $v["food_id"]; ?></p></th>
                    <th><p ><?php echo $v["food_name"]; ?></p></th>
                    <th><p><?php echo $v["food_type"]; ?></p></th>
                    <th><p><?php echo $v["food_quantity"]; ?></p></th>
                    <th><p><?php echo $v["food_quantity_a"]; ?></p></th>
                    <th><p ><?php echo $v["food_ddate"]; ?></p></th>
                    <th><p><?php echo $v["food_edate"]; ?></p></th>
                    <th><p ><?php echo $v["food_location"]; ?></p></th>
                    <th><img src="<?php echo $v["food_pic"]; ?>" style="width:50px;height:50px;"></th>
                    
				   
    
    </tr>
   
<?php
	}

?>

</table><br><br>
<table border=1 align="center">
   <tr>
                
				<th>Volunteer Name</th>
				<th>Volunteer Location</th>
  </tr>
  <?php

	$data1=array(); 
    $status="active";
    
    $sql="select * from volunteer_profile where v_status= '".$status."' ";
    loadFromVolunteerMySQLV($sql);
	foreach($data1 as $r){
	?>
	<tr>
	              <th><?php echo $r["v_firstname"];
				         echo " ";
						 echo $r["v_lastname"];
				   ?></th>
				    <?php
				   $c=(int)$r["v_location"];
		$data2=array();
		$sql="select tha_name from thana where tha_id= '".$c."' ";
        loadFroLocation($sql);
		foreach($data2 as $u)
		{
		?>
		  <th ><?php echo $u["tha_name"]; ?></th>
		   
		  
          
          <?php	
		   
		}
				   ?>
	
	</tr>
	
	<?php
	}
	?>
</table>
<form action="foodprocess.php" name="fm">
                  <h2 style="text-align:center">Volunteer: <select id="activeList" name="active" onchange="load_location(this);">
					
				   <?php
                   foreach($data1 as $r){?>
	               <option value="<?php echo $r["v_email"];?>">
	               <?php echo $r["v_firstname"];
				         echo " ";
						 echo $r["v_lastname"];
				   ?>
	               </option><?php
                   }?></select></h2>
				    <h2 style="text-align:center">Volunteer Location : <p id="here"></p></h2>
					
					<h2 style="text-align:center">Food ID: <input type="text" name="fid" placeholder="Enter food id"><h2>
				<p id="fnameErr" style="color:red;font-size:13px;text-align:center "></p>
				<p style="text-align:center">
                <input type="submit" name="submit" onclick="return validation();" value="Submit">
                </p>
				<br>
				<br>
				<br>
				<br>
					
</form>

</body>
</html>


 
 <?php
}

else{
	header("Location:login.html");
}
?>



