function check_validation(){
document.getElementById('passErr').innerHTML = " ";
document.getElementById('phoneErr').innerHTML = " ";
if(document.fm.pass.value.length <=0){
	    document.getElementById('passErr').innerHTML = "Password can't be empty!!!!";
		return false;
	}
	else{
		if(document.fm.phone.value.length <=0){
	    document.getElementById('phoneErr').innerHTML = "Phone can't be empty!!!!";
		return false;
	    }
		else{
			var str = document.fm.phone.value;
							if (isNaN(str)) 
							{
							  document.getElementById('phoneErr').innerHTML = "Phone number can't be charecter!";
							  return false;
							}
							else{
								return true;
							}
		}
	}
}