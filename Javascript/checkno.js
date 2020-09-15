xmlhttp = new XMLHttpRequest();
function no()
{
	var content = document.getElementById('email').textContent;
            //alert(content);
	str= content;
	//s=document.getElementById('txtHint').value;
	//alert(str);
	
	xmlhttp.onreadystatechange = function() {		
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {	
			
			//alert(xmlhttp.responseText);
			
		}
	};
	var url="../Php/deletevolunteer.php?email="+str;
	//alert("ssad");
	xmlhttp.open("GET", url, true);
	xmlhttp.send();
}