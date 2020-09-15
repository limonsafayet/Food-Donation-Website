<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Donate Food</title>
<link rel="stylesheet" type="text/css" href="../css/food.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

</head>
<body>

<?php
    
	if(strlen($_REQUEST["fname"])==0){
	echo "Food name can't be empty!"."<br/>";
    }
	else
	{
		if(isset($_REQUEST["type"])==0){
	        echo "Food type can't be empty!"."<br/>";
        }
		else
		{
			if(strlen($_REQUEST["quantity"])==0){
	           echo "Food quantity can't be empty!"."<br/>";
            }
			else
			{
				if(isset($_REQUEST["qtype"])==0){
	               echo "Food quantity type can't be empty!"."<br/>";
                }
				else
				{
					if(strlen($_REQUEST["edate"])==0){
	                    echo "Expiry date can't be empty!"."<br/>";
                    }
					else
					{
						if(strlen($_REQUEST["location"])==0){
	                    echo "Location can't be empty!"."<br/>";
                        } 
						else
						{
							if(!isset($_SESSION)) 
                            { 
                               session_start(); 
                            } 
	
							
							$t=time();
							$d=	date("Y-m-d",$t);	
                            $tmp=$_FILES['fileToUpload']['tmp_name'];
                            $name=$_FILES['fileToUpload']['name'];							
							
							if (empty($name))
							{
								$target="../user_donate_food/defult_food.jpg";
								$c="un";
							require("mysql_functions.php");
							$sql="INSERT INTO user_food_donation (user_email,food_name,food_type, food_quantity,food_quantity_a,food_ddate,food_edate,food_location,food_pic,food_validation_type) 
							VALUES ('".$_SESSION["name"]."','".$_REQUEST["fname"]."','".$_REQUEST["type"]."','".$_REQUEST["quantity"]."','".$_REQUEST["qtype"]."','".$d."','".$_REQUEST["edate"]."','".$_REQUEST["location"]."','".$target."','".$c."')";       
							loadintoMySQL($sql);
							?>
							<div class="bgimage">
									<br>
									<br>
									<br><br>
									<div class="hometext">
																	
									<h2> Your donatation is done successfully  </h2><br><br>
																	
									<button id="buttonone" onclick="window.location.href='userprofile.php'"> Go to Home </button>
									<button id="buttonone" onclick="window.location.href='addfoodform.php'"> Go Back </button>
							
									</div>
																	
								    </div>
							<?php
							
							//echo "Your donatation is done successfully"."</br>";
							}
							else
							{
								$up=explode(".",$name);
				
				                $ext=$up[1];
				                //echo $ext;
				
				                $target="../user_donate_food/".time().".".$ext;
									if($ext =="jpg" || $ext=="png"){
									if(file_exists($target)){
									echo "File already exists";
									}
									else{
									$t= move_uploaded_file($tmp,$target);
									
									$c="un";
									require("mysql_functions.php");
									$sql="INSERT INTO user_food_donation (user_email,food_name,food_type, food_quantity,food_quantity_a,food_ddate,food_edate,food_location,food_pic,food_validation_type) 
									VALUES ('".$_SESSION["name"]."','".$_REQUEST["fname"]."','".$_REQUEST["type"]."','".$_REQUEST["quantity"]."','".$_REQUEST["qtype"]."','".$d."','".$_REQUEST["edate"]."','".$_REQUEST["location"]."','".$target."','".$c."')";       
									loadintoMySQL($sql);
									?>
									<div class="bgimage">
									<br>
									<br>
									<br><br>
									<div class="hometext">
																	
									<h2> Your donatation is done successfully  </h2><br><br>
																	
									<button id="buttonone" onclick="window.location.href='userprofile.php'"> Go to Home </button>
									<button id="buttonone" onclick="window.location.href='addfoodform.php'"> Go Back </button>
							
									</div>
																	
								    </div>
									
									<?php
									
									
									
									
									}
								}
							}
							
		
						}
					}
				}
			}
		}
	}
    
?>
</body>
</html>

<?php
}

else{
	header("Location:../login.html");
}
?>









          
          
          
         