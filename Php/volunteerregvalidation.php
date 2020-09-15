<!DOCTYPE html>
<html>
<head>
	<title>Complete Registation</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
		 <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
		  <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
</head>
<body>

<?php

if(strlen($_REQUEST["fname"])==0){
	echo "First name can't be empty!"."<br/>";
}
else
{
	if(strlen($_REQUEST["lname"])==0){
	echo "Last name can't be empty!"."<br/>";
    }
	else
    {
	    if(strlen($_REQUEST["email"])==0){
	    echo "Email can't be empty!"."<br/>";
        }
	 
        
            else
			{
			    $a=strpos($_REQUEST["email"],"@");
			    if($a==0){
	            echo "Email is not valid!"."<br/>";
                }
				
				else
				{
				    $b=strrpos($_REQUEST["email"],".");
						
					if($a>$b){
	                echo "Email is not valid!"."<br/>";
                    } 
				   
				    else
					{
					    if(strlen($_REQUEST["institution"])==0){
	                    echo "Institution can't be empty!"."<br/>";
                        }
						else{
						if(empty($_REQUEST["districtList"])){
	                    echo "District can't be empty!"."<br/>";
                        }
						
				 
				        else
					    {
						
						  if(strlen($_REQUEST["bday"])==0){
	                      echo "Birth day can't be empty!"."<br/>";
                          }
						  
						    else
						    {
							  
							  if(isset($_REQUEST["gender"])==0){
	                          echo "Gender can't be empty!"."<br/>";
                              }
                                else
								{							  
							       if(strlen($_REQUEST["phone"])==0){
	                               echo "Phone number can't be empty!"."<br/>";
                                   }
								    else
									{
									      $b=0;
								          $s = $_REQUEST["phone"];
                                          for ($i = 0; $i < strlen($s); $i++){
                                          $char = $s[$i];
                                          if (is_numeric($char))
								          {
                                    
                                          }
                                          else
								          {
									         $b=1; 
								          }									 
                                          }
						       
						                  if($b==1)
								          {
									        echo "Phone number can't be charecter!"."<br/>";
								          }
										  
										else
										{
											if(strlen($_REQUEST["pass"])==0){
	                                   echo "Password can't be empty!"."<br/>";
                                       }
							        else
							        {
								       if(strlen($_REQUEST["pass"])<8){
								       echo "Password must contains 8 char!"."<br/>";	
								       }
								        else
								        {
									       if(strlen($_REQUEST["cpass"])==0){
	                                       echo "Confirm password can't be empty!"."<br/>";
                                           }
									        else
									        {
										       $a=strcmp($_REQUEST["pass"],$_REQUEST["cpass"]);
	                                           if($a!=0){
	                                           echo "Password & Confirm password did not match!"."<br/>";
                                               }
										       else
										       {/*
												    require("loginfuntion.php");
                                                    $arr=array();
													loadFromUserFile();
                                                    loadFromVolunteerFile();
                                                    $uname=$_REQUEST["email"];
                                                    if(isset($arr[$uname])){
                                                        echo "Sorry use another email this email is exist already";
                                                    }
												    else
													{
														$file=fopen('volunteerdata.txt','a') or die("fle open error");
											        $c=0;
                                                    $c=fwrite($file,"\r\n");
	                                                $c+=fwrite($file,$_REQUEST["fname"]);
													$c+=fwrite($file," ");
											        $c+=fwrite($file,$_REQUEST["lname"]);
	                                                $c+=fwrite($file," ");
											        $c+=fwrite($file,$_REQUEST["email"]);
													$c+=fwrite($file," ");
											        $c+=fwrite($file,$_REQUEST["institution"]);
													$c+=fwrite($file," ");
											        $c+=fwrite($file,$_REQUEST["bday"]);
	                                                $c+=fwrite($file," ");
													$c+=fwrite($file,$_REQUEST["gender"]);
	                                                $c+=fwrite($file," ");
											        $c+=fwrite($file,$_REQUEST["phone"]);
	                                                $c+=fwrite($file," ");
	                                                $c+=fwrite($file,md5($_REQUEST["pass"]));
													$c+=fwrite($file," ");
	                                                $c+=fwrite($file,"unvalid");
											        echo"Registation complete successfully!!!!!!"."</br>";
													echo"After check your information you can login"."</br>";
													
													?>
													<a href="homepage.html">Go to homepage</a>
													<?php
													}
												*/
												    require("mysql_functions.php");
                                                    $sql="select * from user_profile where user_email= '".$_REQUEST["email"]."' ";
                                                    loadFromMySQL($sql);
													$sql="select * from volunteer_profile where v_email= '".$_REQUEST["email"]."' ";
                                                    loadFromMySQL($sql);
													if (empty($data)) {
														
													$a="../user_profile_photo/defult_user.png";
													$b="volunteer";
													$c="unactive";
													//require("mysql_functions.php");
													$sql="INSERT INTO volunteer_profile (v_firstname,v_lastname,v_email,v_institution, v_division,v_district,v_location,v_bdate,v_gender,v_time,v_phone,v_pass,v_pic,v_type,v_status) 
													VALUES ('".$_REQUEST["fname"]."','".$_REQUEST["lname"]."','".$_REQUEST["email"]."','".$_REQUEST["institution"]."','".$_REQUEST["division"]."','".$_REQUEST["districtList"]."','".$_REQUEST["thanaList"]."','".$_REQUEST["bday"]."','".$_REQUEST["gender"]."','".$_REQUEST["time"]."','".$_REQUEST["phone"]."','".md5($_REQUEST["pass"])."','".$a."','".$b."','".$c."')";       
													loadintoMySQL($sql);
													//print_r($_REQUEST);
													
													?>
														    <div class="bgimage">
															<br>
															<br>
															<br><br>
															<div class="hometext">
															<h2> Registation complete successfully!!!!!!</h2><br><br>
															<h2> After check your information you can login </h2><br><br>
															<button id="buttonone" onclick="window.location.href='../homepage.html'"> Go to homepage </button>
															
															</div>
																										
															</div>
													<?php
													//echo"Registation complete successfully!!!!!!"."</br>";
													}
													else
													{
														?>
														    <div class="bgimage">
															<br>
															<br>
															<br><br>
															<div class="hometext">
															<h2> Sorry use another email this email is exist already </h2><br><br>
															<h2> "Try again" </h2><br><br>
															<button id="buttonone" onclick="window.location.href='../homepage.html'"> Go to homepage </button>
															<button id="buttonone" onclick="window.location.href='../volunteerreg.php'"> Go Back </button>
															</div>
																										
															</div>
															<?php
													}
												    
												     
										       }
									        }
								        }
							        }
										}
									   
									   
									}
							       
						        }
					        }
					}    }
				}
			}			
					  
					
	  
    }
	
   }
}
?>

</body>
</html>