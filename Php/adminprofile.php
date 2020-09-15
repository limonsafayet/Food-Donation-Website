<?php
session_start();
if(isset($_SESSION["flag"]) && $_SESSION["flag"]=="success"){
	?>
<!DOCTYPE html>
<html>
<head>
<title>Admin profile</title>

</head>
<body>
<?php
$uname=$_SESSION["name"];
require("loginfuntionadmin.php");
$arr=array();
$name=array();
loadFromAdminXML();
if(isset($arr[$uname])){
	 ?>
	 <h2> Admin: <?php echo $name[$uname]; ?></h2>
	 <?php
    }


?>


		<p style="text-align:right">
          <input type="button"  onclick="window.location.href='logout.php'" value="Log Out">
        </p>
		</br>
		</br>
		</br>
		</br>
        <p style="text-align:center">
          <input type="button"  onclick="window.location.href='volunteerrequest.php'" value="Show Volunteer Request">
        </p>
		<p style="text-align:center">
          <input type="button"  onclick="window.location.href='activevolunteer.php'" value="Show Active Volunteers">
        </p>
		<p style="text-align:center">
          <input type="button"  onclick="window.location.href='distributevolunteer.php'" value="Distribute Work To Volunteers">
        </p>

</body>
</html>
<?php
}

else{
	header("Location:login.html");
}
?>