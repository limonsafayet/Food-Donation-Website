<?php
function loadFromUserFile(){
	global $arr;
	global $type;
	$file=fopen("userdata.txt","r")or die("error");
	while($line=fgets($file)){
		$line=trim($line);
		$up=explode(" ",$line);
		$arr[$up[1]]=$up[3];
		$type[$up[1]]=$up[4];
	}
	fclose($file);
}

function loadFromVolunteerFile(){
	global $arr;
	global $type;
	$file=fopen("volunteerdata.txt","r")or die("error");
	while($line=fgets($file)){
		$line=trim($line);
		$up=explode(" ",$line);
		$arr[$up[2]]=$up[7];
		$type[$up[2]]=$up[8];
	}
	fclose($file);
}

function loadFromAdminXML(){
	global $arr;
	global $type;
	global $name;
	$xml=simplexml_load_file("admindata.xml") or die("Error: Cannot create object");
	foreach($xml as $st){
		$dar=array();
		$dar["un"]=(string)$st->email;
		$dar["pass"]=(string)$st->pass;
		$dar["type"]=(string)$st->type;
		$dar["name"]=(string)$st->name;
		//$arr[]=$dar;
		$arr[$dar["un"]]=$dar["pass"];
		$type[$dar["un"]]=$dar["type"];
		$name[$dar["un"]]=$dar["name"];
	}
	
	

}
?>