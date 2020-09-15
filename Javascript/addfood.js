function check_validation(){
	document.getElementById('fnameErr').innerHTML = " ";
	document.getElementById('ftypeErr').innerHTML = " ";
	document.getElementById('quantityErr').innerHTML = " ";
	document.getElementById('expiryErr').innerHTML = " ";
	document.getElementById('locationErr').innerHTML = " ";
	
	
    if(document.fm.fname.value.length <=0){
	    document.getElementById('fnameErr').innerHTML = "Food name can't be empty!";
		return false;
	}
	else{
		if(document.fm.type.value.length == 0){
		document.getElementById('ftypeErr').innerHTML = "Food type can't be empty!";
		return false;
	    }
		else{
			if(document.fm.quantity.value.length <=0){
	        document.getElementById('quantityErr').innerHTML = "Food quantity can't be empty!";
		    return false;
	        }
			else{
				if(document.fm.qtype.value.length == 0){
		        document.getElementById('quantityErr').innerHTML = "Choose quantity!";
		        return false;
	            }
				else{
					if(document.fm.edate.value.length ==0){
			        document.getElementById('expiryErr').innerHTML = "Expiry date can't be empty!";
		            return false;
				    }
					else{
						if(document.fm.location.value.length <=0){
	                    document.getElementById('locationErr').innerHTML = "Location can't be empty!";
		                return false;
	                    }
					}
				}
			}
			
		}
	}
	
}