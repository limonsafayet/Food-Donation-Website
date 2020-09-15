<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
     <title>Warning</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>


        <?php
        $data=array();
        require("mysql_functions.php");
        $sql="select * from process_food where volu_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		
		foreach($data as $v)
			{
				
				$data1=array();
                //require("mysql_functions.php");

            $p="un";
    
             
			 $sql="UPDATE user_food_donation SET food_validation_type= '".$p."' where food_id= '".$v["p_food_id"]."'";
                updateFromMySQL($sql);
				
				$sq="DELETE FROM process_food where volu_email= '".$_SESSION["name"]."' ";
                updateFromMySQL($sq);
				
			}
		
		
				
				header('Location:volunteerprofile.php');
			
				
           
        ?>
		
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>