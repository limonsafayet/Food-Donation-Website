function volunteer_validation(){
	document.getElementById('fnameErr').innerHTML = " ";
	document.getElementById('lnameErr').innerHTML = " ";
	document.getElementById('emailErr').innerHTML = " ";
	document.getElementById('institutionErr').innerHTML = " ";
	document.getElementById('bdayErr').innerHTML = " ";
	document.getElementById('genderErr').innerHTML = " ";
	document.getElementById('phoneErr').innerHTML = " ";
	
	
	if(document.fm.fname.value.length <=0){
	    document.getElementById('fnameErr').innerHTML = "First name can't be empty!";
		return false;
	}
	else{
		if(document.fm.lname.value.length <=0){
	    document.getElementById('lnameErr').innerHTML = "Last name can't be empty!";
		return false;
	    }
		else{
			if(document.fm.email.value.length <=0){
		    document.getElementById('emailErr').innerHTML = "Email can't be empty!";
		    return false;
			}
			else{
				var str = document.fm.email.value;
				var pos = str.indexOf("@");
				if(pos <0 ){
					document.getElementById('emailErr').innerHTML = "Email is not valid!";
					return false;
				}
				else{
					var str = document.fm.email.value;
					var pos1 = str.indexOf("@");
					var pos = str.lastIndexOf(".");
					if(pos1 > pos  ){
					document.getElementById('emailErr').innerHTML = "Email is not valid!";
					return false;
					}
					else{
						if(document.fm.bday.value.length ==0){
			            document.getElementById('bdayErr').innerHTML = "Birth day can't be empty!";
		                return false;
	                    }
						else{
							if(document.fm.gender.value.length == 0){
				            document.getElementById('genderErr').innerHTML = "Gender can't be empty!";
		                    return false;
	                        }
							else{
								if(document.fm.phone.value.length ==0){
		                        document.getElementById('phoneErr').innerHTML = "Phone can't be empty!";
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
										if(document.fm.pass.value.length <=0){
		                                document.getElementById('passErr').innerHTML = "Password can't be empty!";
		                                return false;
	                                    }
										else{
											if(document.fm.pass.value.length < 8){
		                                    document.getElementById('passErr').innerHTML = "Password must contains 8 char!";
		                                    return false;
	                                        }
											else{
												if(document.fm.cpass.value.length ==0){
		                                        document.getElementById('cpassErr').innerHTML = "Confirm password can't be empty!";
		                                        return false;
	                                            }
												else{
													var str1 = document.fm.pass.value;
													var str2 = document.fm.cpass.value;
													var n = str1.localeCompare(str2);
													if(n != 0)
													{
													document.getElementById('cpassErr').innerHTML = "Password & Confirm password did not match!";
													return false;
													}
													else
													{
													return true;
													}
											    }
											}
										}
									}
								}
							}
						}
						
					}
							
					
					
				}
			}
		}
	}
}