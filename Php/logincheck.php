<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

<?php
/*require("loginfuntion.php");
$arr=array();
$type=array();
loadFromUserFile();
loadFromVolunteerFile();
loadFromAdminXML();


$uname=$_REQUEST["username"];
    session_start();
	//$c=$_REQUEST["username"];
	$_SESSION["name"]=$uname;
	
$pass=md5($_REQUEST["password"]);
$adminpass=$_REQUEST["password"];
$normal="user";
$admintype="admin";
$valid="valid";

if(isset($arr[$uname]) && $arr[$uname]==$pass && $type[$uname]==$normal){
	 $_SESSION["flag"]="success";
	 header('Location:userprofile.php');
	 
}

else if(isset($arr[$uname]) && $arr[$uname]==$adminpass && $type[$uname]==$admintype){
	 $_SESSION["flag"]="success";
	 header('Location:adminprofile.php');
}

else if(isset($arr[$uname]) && $arr[$uname]==$pass && $type[$uname]==$valid){
	 $_SESSION["flag"]="success";
	 header('Location:volunteerprofile.html');
}

else{
	echo "Invalid user"."</br>";
	echo "Check you username & password";
	//header("Location:login.php?error=wrong info");
}*/
$data=array();
$data1=array();

$pass=md5($_REQUEST["password"]);
$type="user";
$type1="volunteer";
$status="active";
$t=0;
$q=0;
require("mysql_functions.php");
$sql="select * from user_profile where user_email= '".$_REQUEST["username"]."' ";
loadFromMySQL($sql);



session_start();
	//$c=$_REQUEST["username"];


if (empty($data)) {
	$t=1;
     
}

if($t==0)
{
	foreach($data as $v){
	
	  if(isset($v["user_email"]) && $v["user_email"]==$_REQUEST["username"] && $v["user_pass"]==$pass && $v["user_type"]==$type )
	  {
		//header('Location:test.php');
		$_SESSION["name"]=$_REQUEST["username"];
		$_SESSION["flag"]="success";
	    header('Location:userprofile.php');
	  }
	  else
	  {
		?>
		
		<div class="bgimage">
		<br>
		<br>
		<br><br>
	    <div class="hometext">
		<h2> hhWrong User Email Or Password!!!! </h2><br><br>
		<h2> "Try again" </h2><br><br>
		<button id="buttonone" onclick="window.location.href='../homepage.html'"> Go to homepage </button>
		<button id="buttonone" onclick="window.location.href='../login.html'"> Go to Login </button>
		</div>
													
		</div>
		
		<?php  
	  }
	}
}

$sql="select * from volunteer_profile where v_email= '".$_REQUEST["username"]."' ";
loadFromVolunteerMySQLV($sql);

if (empty($data1)) {
	$q=1;
	//echo "deddee";
	
}
if($q == 0)
{
	foreach($data1 as $v){
	
	
	if(isset($v["v_email"]) && $v["v_email"]==$_REQUEST["username"] && $v["v_pass"]==$pass && $v["v_type"]==$type1 && $v["v_status"]==$status)
	    {
		//header('Location:test.php');
		$_SESSION["name"]=$_REQUEST["username"];
		$_SESSION["flag"]="success";
	    header('Location:volunteerprofile.php');
	    }
		else
	  {
		?>
		
		<div class="bgimage">
		<br>
		<br>
		<br><br>
	    <div class="hometext">
		<h2> Wrong User Email Or Password!!!! </h2><br><br>
		<h2> "Try again" </h2><br><br>
		<button id="buttonone" onclick="window.location.href='../homepage.html'"> Go to homepage </button>
		<button id="buttonone" onclick="window.location.href='../login.html'"> Go to Login </button>
		</div>
													
		</div>
		
		<?php  
	  }
	}
}

$z=1;
$adminpass=$_REQUEST["password"];
$uname=$_REQUEST["username"];
$admintype="admin";
require("loginfuntionadmin.php");
$arr=array();
$type=array();

loadFromAdminXML();

if(isset($arr[$uname]) && $arr[$uname]==$adminpass && $type[$uname]==$admintype){
	 $_SESSION["name"]=$_REQUEST["username"];
	 $_SESSION["flag"]="success";
	 header('Location:adminprofile.php');
	 $z=0;
    }

	if($t==1 && $q==1 && $z==1)
	{
		?>
		
		<div class="bgimage">
		<br>
		<br>
		<br><br>
	    <div class="hometext">
		<h2> Wrong User Email Or Password!!!! </h2><br><br>
		<h2> "Try again" </h2><br><br>
		<button id="buttonone" onclick="window.location.href='../homepage.html'"> Go to homepage </button>
		<button id="buttonone" onclick="window.location.href='../login.html'"> Go to Login </button>
		</div>
													
		</div>
		
		<?php
	}
	


	





?>

</body>
</html>