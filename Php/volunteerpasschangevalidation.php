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
         //$_REQUEST["pass"]
		$pass=md5($_REQUEST["pass"]);
		$pass1=md5($_REQUEST["npass"]);
		$type="volunteer";
        $type="user";
        require("mysql_functions.php");
        $sql="select * from volunteer_profile where v_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		
		foreach($data as $v){
		    if($v["v_pass"]==$pass && $v["v_type"]==$type)
        	{
				$sql="UPDATE volunteer_profile SET v_pass= '".$pass1."' where v_email= '".$_SESSION["name"]."'";
                updateFromMySQL($sql);
				header('Location:volunteersettings.php');
			}
            else{
				?>
				<div class="bgimage">
					<br>
					<br>
					<br><br>
					<div class="hometext">
													
					<h2> Worng Password Try Again  </h2><br><br>
													
					<button id="buttonone" onclick="window.location.href='volunteersettings.php'"> Go to Settings </button>
					<button id="buttonone" onclick="window.location.href='volunteerpasschange.php'"> Go Back </button>
			
			        </div>
													
				</div>
				
				<?php
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