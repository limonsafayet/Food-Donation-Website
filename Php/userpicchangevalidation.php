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
		$type="user";
        $type="user";
        require("mysql_functions.php");
        $sql="select * from user_profile where user_email= '".$_SESSION["name"]."' ";
        loadFromMySQL($sql);
		
		foreach($data as $v){
		    if($v["user_pass"]==$pass && $v["user_type"]==$type)
        	{
				
				
				$tmp=$_FILES['fileToUpload']['tmp_name'];
                $name=$_FILES['fileToUpload']['name'];
				
				$up=explode(".",$name);
				
				$ext=$up[1];
				//echo $ext;
				
				$target="../user_profile_photo/".time().".".$ext;

				if($ext =="jpg" || $ext=="png"){
					if(file_exists($target)){
					echo "File already exists";
				    }
					else{
					$t= move_uploaded_file($tmp,$target);
					//$sql="insert into photo values(null,'".$_POST["uName"]."','".$target."')";
					
					$sql="UPDATE user_profile SET user_pic= '".$target."' where user_email= '".$_SESSION["name"]."'";
                    updateFromMySQL($sql);
				    header('Location:usersettings.php');
					
				    }
				}
				
				
			}
            else{
				?>
				
				<div class="bgimage">
					<br>
					<br>
					<br><br>
					<div class="hometext">
													
					<h2> Worng Password Try Again  </h2><br><br>
													
					<button id="buttonone" onclick="window.location.href='usersettings.php'"> Go to Settings </button>
					<button id="buttonone" onclick="window.location.href='userpicchange.php'"> Go Back </button>
			
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