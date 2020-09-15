function check_validation(){
	document.getElementById('amountErr').innerHTML = " ";
	document.getElementById('passErr').innerHTML = " ";
	if(document.fm.amount.value.length <=0){
	    document.getElementById('amountErr').innerHTML = "Amount can't be empty!";
		return false;
	}
	else{
		var str = document.fm.amount.value;
	    if (isNaN(str)) 
		{
		  document.getElementById('amountErr').innerHTML = "Amount can't be charecter!";
		  return false;
        }
		else{
			if(document.fm.pass.value.length <=0){
			document.getElementById('passErr').innerHTML = "Password can't be empty!";
			return false;
			}
			else{
				return true;
			}
		}
	}
}