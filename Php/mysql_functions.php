<?php

function loadFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","donationbox");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	
	while($row = mysqli_fetch_assoc($result)) {
		
		$data[]=$row;
	}
}

function loadFroDivision($sql){
	global $data1;
	$conn = mysqli_connect("localhost", "root", "","donationbox");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data1=array();
	
	while($row = mysqli_fetch_assoc($result)) {
		
		$data1[]=$row;
	}
}
function loadFroLocation($sql){
	global $data2;
	$conn = mysqli_connect("localhost", "root", "","donationbox");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data2=array();
	
	while($row = mysqli_fetch_assoc($result)) {
		
		$data2[]=$row;
	}
}

function loadFromVolunteerMySQLV($sql){
	global $data1;
	$conn = mysqli_connect("localhost", "root", "","donationbox");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data1=array();
	
	while($row = mysqli_fetch_assoc($result)) {
		
		$data1[]=$row;
	}
}

function loadintoMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","donationbox");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	//$data=array();
	
	mysqli_close($conn);
}

function updateFromMySQL($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","donationbox");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	//$data=array();
	
	mysqli_close($conn);
}

function loadFromMySQLUser($sql){
	global $data;
	$conn = mysqli_connect("localhost", "root", "","donationbox");
	$result = mysqli_query($conn, $sql)or die(mysqli_error($conn));
	$data=array();
	
	while($row = mysqli_fetch_assoc($result)) {
		
		$ar=array();
		$ar["user_name"]=$row["user_name"];
		$ar["user_email"]=$row["user_email"];
		$ar["user_phone"]=$row["user_phone"];
		$ar["user_pass"]=$row["user_pass"];
		$ar["user_pic"]=$row["user_pic"];
		$ar["user_type"]=$row["user_type"];
		$data[]=$ar;
	}
	
}

?>