<?php
$data=array();
require("mysql_functions.php");
if(isset($_REQUEST["flag"]) && $_REQUEST["flag"]=="loadDistrict"){
	$sql="select * from district where div_id='".$_REQUEST["divid"]."'";	
	loadFromMySQL($sql);
	echo json_encode($data);
	
}

if(isset($_REQUEST["flag"]) && $_REQUEST["flag"]=="loadThana"){
	$sql="select * from thana where dis_id='".$_REQUEST["disid"]."'";	
	loadFromMySQL($sql);
	echo json_encode($data);
	
}
?>