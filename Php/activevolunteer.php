<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	
$auth=array();
require("mysql_functions.php");


?>
<html>
<head>

</head>
<body>



<table border=1>
  <tr>
    <th>Firstname</th>
    <th>Lastname</th> 
    <th>Email</th>
    <th>Institution</th>
    <th>Division</th>
    <th>District</th>
    <th>Location</th>
    <th>Date Of Birth</th>
    <th>Gender</th>
    <th>Phone</th>
    
  </tr>
 
<?php

	$data=array(); 
    $status="active";
    
    $sql="select * from volunteer_profile where v_status= '".$status."' ";
    loadFromMySQL($sql);
	foreach($data as $v){
	?>
	   
	<tr>

      <th><?php echo $v["v_firstname"]; ?></th>
      <th><?php echo $v["v_lastname"]; ?></th>
      <th><p id="email"><?php echo $v["v_email"]; ?></p></th>
      <th><?php echo $v["v_institution"]; ?></th>
	  <?php
	    $data1=array();
		$a=(int)$v["v_division"];
		$b=(int)$v["v_district"];
		$c=(int)$v["v_location"];
	    $sql="select division.div_name, district.dis_name from division, district where division.div_id= '".$a."' and district.dis_id= '".$b."' ";
        loadFroDivision($sql);
		foreach($data1 as $u)
		{
			?>
		   <th><?php echo $u["div_name"]; ?></th>
		   <th><?php echo $u["dis_name"]; ?></th>
          
          	
		   <?php
		}
		$data2=array();
		$sql="select tha_name from thana where tha_id= '".$c."' ";
        loadFroLocation($sql);
		foreach($data2 as $u)
		{
			?>
		   <th><?php echo $u["tha_name"]; ?></th>
		  
          
          	
		   <?php
		}
		
	  ?>
      <th><?php echo $v["v_bdate"]; ?></th>
      <th><?php echo $v["v_gender"]; ?></th>
      <th><?php echo $v["v_phone"]; ?></th>
	  
      
	
    
    
    </tr>
   
<?php
	}

?>

</table>


</body>
</html>


 
 <?php
}

else{
	header("Location:login.html");
}
?>



