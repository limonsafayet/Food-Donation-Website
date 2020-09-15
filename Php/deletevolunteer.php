<?php
$data=array();
$p ="active";
require("mysql_functions.php");
$sql="DELETE FROM volunteer_profile where v_email= '".$_GET["email"]."' ";
                updateFromMySQL($sql);
//$sql="select * from user_profile where user_email= '".$_GET["uname"]."'";
//$sql="select * from user_profile where user_email= 'rahim@gmail.com'";
echo $sql;
//loadFromText();
//loadFromMySQL($sql);


	
//print_r($data);
?>

