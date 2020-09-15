xmlhttp = new XMLHttpRequest();
document.getElementById('here').value=" ";
function load_location(v) {
	//alert("SDSD");
	
	str=v.value;
	//alert(str);
	
	
	xmlhttp.onreadystatechange = function(){
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
           	//alert("aa");
			m=document.getElementById("here");
			m.innerHTML=xmlhttp.responseText;
		}
	};

	var url="../Php/loadvolenteerlocation.php?vid="+str;
	//alert("ssad");
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}