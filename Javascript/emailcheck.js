xmlhttp = new XMLHttpRequest();
//document.getElementById('txtHint').value=" ";
function showHint() {
	str=document.getElementById('mytext').value;
	//s=document.getElementById('txtHint').value;
	
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			m=document.getElementById("txtHint");
			m.innerHTML=xmlhttp.responseText;
			//alert("SC");
			
		}
	};
	var url="./Php/fetch.php?uname="+str;
	//alert("ssad");
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}