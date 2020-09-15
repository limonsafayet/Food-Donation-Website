xmlhttp = new XMLHttpRequest();
flag="";
function clearCombo(id){
	var list=document.getElementById(id);
	while (list.firstChild) {
		list.removeChild(list.firstChild);
	}
}
function loadJSONToDisCombo(id,jsn){
	var resp=JSON.parse(jsn);
	var combo = document.getElementById(id);
	for(i=0;i<resp.length;i++){
		var option = document.createElement("option");
		option.text = resp[i].dis_name;
		option.value = resp[i].dis_id;
		combo.add(option); 
	}
}
function load_District(v) {
	//alert("SDSD");
	str=v.value;
	flag="loadDistrict";
	clearCombo("districtList");
	
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
           	
			loadJSONToDisCombo("districtList",xmlhttp.responseText);
		}
	};
	var url="./Php/data_load_functions.php";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("flag="+flag+"&divid="+str);
}


function loadJSONToThaCombo(id,jsn){
	var resp=JSON.parse(jsn);
	var combo = document.getElementById(id);
	for(i=0;i<resp.length;i++){
		var option = document.createElement("option");
		option.text = resp[i].tha_name;
		option.value = resp[i].tha_id;
		combo.add(option); 
	}
}
function load_Thana(v) {
	str=v.value;
	flag="loadThana";
	clearCombo("thanaList");
	
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
           	
			loadJSONToThaCombo("thanaList",xmlhttp.responseText);
		}
	};
	var url="./Php/data_load_functions.php";
	xmlhttp.open("POST", url, true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.send("flag="+flag+"&disid="+str);
}
