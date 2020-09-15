function check_validation(){
document.getElementById('nameErr').innerHTML = " ";
    if(document.fm.username.value.length <=0){
	    document.getElementById('nameErr').innerHTML = "User email can't be empty!";
		return false;
	}
	else{
	    if(document.fm.password.value.length <=0){
	    document.getElementById('passErr').innerHTML = "User password can't be empty!";
		return false;
	    }
		else{
		    return true;
		}
	}
}