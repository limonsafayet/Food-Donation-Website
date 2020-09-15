<?php
$data=array();
require("mysql_functions.php");
$sql="select * from user_profile where user_email= '".$_GET["uname"]."'";
//$sql="select * from user_profile where user_email= 'rahim@gmail.com'";
//echo $sql;
//loadFromText();
loadFromMySQL($sql);
foreach($data as $v){
	
	echo "email is already exiest";
	
}

	
//print_r($data);
?>

