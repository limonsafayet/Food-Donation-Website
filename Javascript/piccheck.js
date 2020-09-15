function check_validation(){
	
document.getElementById('passErr').innerHTML = " ";
document.getElementById('picErr').innerHTML = " ";
	if(document.fm.pass.value.length <=0){
	    document.getElementById('passErr').innerHTML = "Password can't be empty!!!!";
		return false;
	}
	else{
		if(document.fm.fileToUpload.value.length==0){
		document.getElementById('picErr').innerHTML = "Choose a file first!!!!";
		return false;
	    }
		else{
			return true;
		}
	}
	
}