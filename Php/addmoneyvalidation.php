<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Money Dontion</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">

</head>
<body>

<?php
    
    $t=time();
	$d=	date("Y-m-d",$t);	
    $data=array();
         //$_REQUEST["pass"]
		$pass=md5($_REQUEST["pass"]);
		$type="user";
        
        require("mysql_functions.php");
        $sql="select * from user_profile where user_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		
		foreach($data as $v){
		    if($v["user_pass"]==$pass && $v["user_type"]==$type)
        	{
				
				$t=time();
				$d=	date("Y-m-d",$t);
				
				$sql="INSERT INTO user_money_donation (user_email,money_ddate,money_amount) 
				VALUES ('".$_SESSION["name"]."','".$d."','".$_REQUEST["amount"]."')";       
				loadintoMySQL($sql);
				?>
				<div class="bgimage">
									<br>
									<br>
									<br><br>
									<div class="hometext">
																	
									<h2> Your donatation is done successfully  </h2><br><br>
																	
									<button id="buttonone" onclick="window.location.href='userprofile.php'"> Go to Home </button>
									<button id="buttonone" onclick="window.location.href='addmoneyform.php'"> Go Back </button>
							
									</div>
																	
								    </div>
				<?php
			}
            else{
				?>
				<div class="bgimage">
					<br>
					<br>
					<br><br>
					<div class="hometext">
													
					<h2> Worng Password Try Again  </h2><br><br>
													
					<button id="buttonone" onclick="window.location.href='userprofile.php'"> Go to Home </button>
					<button id="buttonone" onclick="window.location.href='addmoneyform.php'"> Go Back </button>
			
			        </div>
													
				</div>
				
				<?php
				//header('Location:userphonechange.php');
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









          
          
          
         