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

    if(strlen($_REQUEST["name"])==0){
	echo "User name can't be empty!"."<br/>";
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
										        {
											        /*$file=fopen('userdata.txt','a') or die("fle open error");
											        $c=0;
                                                    $c=fwrite($file,"\r\n");
	                                                $c+=fwrite($file,$_REQUEST["name"]);
	                                                $c+=fwrite($file," ");
											        $c+=fwrite($file,$_REQUEST["email"]);
	                                                $c+=fwrite($file," ");
											        $c+=fwrite($file,$_REQUEST["phone"]);
	                                                $c+=fwrite($file," ");
	                                                $c+=fwrite($file,md5($_REQUEST["pass"]));
													$c+=fwrite($file," ");
	                                                $c+=fwrite($file,"user");
													
													$file=fopen('usermoneydonate.txt','a') or die("fle open error");
											        $c=0;
                                                    $c=fwrite($file,"\r\n");
	                                                
						                            $c+=fwrite($file,$_REQUEST["email"]);
	                                                $c+=fwrite($file," ");
											        $c+=fwrite($file,"0");
	                                                $c+=fwrite($file," ");
	                                                $t=time();
													
	                                                $c+=fwrite($file,date("Y-m-d",$t));
													
													
													$file=fopen('userfooddonate.txt','a') or die("fle open error");
											        $c=0;
                                                    $c=fwrite($file,"\r\n");
	                                                
						                            $c+=fwrite($file,$_REQUEST["email"]);
	                                                $c+=fwrite($file," ");
											        $c+=fwrite($file,"0");*/
													require("mysql_functions.php");
                                                    $sql="select * from user_profile where user_email= '".$_REQUEST["email"]."' ";
                                                    loadFromMySQL($sql);
													$sql="select * from volunteer_profile where v_email= '".$_REQUEST["email"]."' ";
                                                    loadFromMySQL($sql);
													if(empty($data)){
													
													$a="../user_profile_photo/defult_user.png";
													$b="user";
													$c=" ";
													//require("mysql_functions.php");
													$sql="INSERT INTO user_profile (user_name,user_email,user_phone,user_pass, user_pic,user_type) 
													VALUES ('".$_REQUEST["name"]."','".$_REQUEST["email"]."','".$_REQUEST["phone"]."','".md5($_REQUEST["pass"])."','".$a."','".$b."')";       
													loadintoMySQL($sql);
													
													
											        ?>
													<div class="bgimage">
													<br>
													<br>
													<br><br>
													<div class="hometext">
													
													<h2> Registation Complete Successfully!!!! </h2><br><br>
													
													<button id="buttonone" onclick="window.location.href='../homepage.html'"> Go to homepage </button>
													<button id="buttonone" onclick="window.location.href='../login.html'"> Go to Login </button>
			
			
		                                            </div>
													
													</div>
													<?php
													
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
															<button id="buttonone" onclick="window.location.href='../registation.html'"> Go Back </button>
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
			}
				
							
	  
    
	
    }


?>
</body>
</html>