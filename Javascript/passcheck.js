function check_validation(){
document.getElementById('passErr').innerHTML = " ";
document.getElementById('npassErr').innerHTML = " ";
document.getElementById('cpassErr').innerHTML = " ";
if(document.fm.pass.value.length <=0){
	    document.getElementById('passErr').innerHTML = "Password can't be empty!!!!";
		return false;
	}
	else{
		if(document.fm.npass.value.length <=0){
	    document.getElementById('npassErr').innerHTML = "New password can't be empty!!!!";
		return false;
	    }
		else{
			if(document.fm.npass.value.length < 8){
				document.getElementById('npassErr').innerHTML = "Password must contains 8 char!";
			    return false;
			    }
				else{
					if(document.fm.cpass.value.length <=0){
						document.getElementById('cpassErr').innerHTML = "Confirm password can't be empty!";
						return false;
						}
						else{
							var str1 = document.fm.npass.value;
							var str2 = document.fm.cpass.value;
							var n = str1.localeCompare(str2);
							if(n != 0)
							{
							document.getElementById('cpassErr').innerHTML = "Password & Confirm password did not match!";
							return false;
							}
							else{
								return true;
							}
						}
				}
		}
	}
}