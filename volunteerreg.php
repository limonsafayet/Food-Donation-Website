<!DOCTYPE html>
<html>
<head>

<?php
require("Php/mysql_functions.php");
$data=array();
loadFromMySQL("select * from division");?>

<title>Volunteer registation</title>
    <link rel="stylesheet" type="text/css" href="css/vstyle.css">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700%7CPT+Serif:400,700,400italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans" rel="stylesheet">
	
</head>
<body>


<script src="Javascript/volunteer.js"></script>
<script src="Javascript/load.js"></script>




    <div class="menu">
      
      <div class="leftmenu">
        <h4> Donation Box </h4>
      </div>

      <div class="rightmenu">
        <ul>
          <li ><a href="homepage.html"> HOME </a></li>
          <li><a href="donatefood.html"> DONATE</a></li>
          <li><a href="joinus.html">JOIN US</a></li>
          <li><a href="about.html">ABOUT</a></li>
          <li><a href="contact.html"> CONTACT </a></li>
          <li><a href="login.html"> LOGIN </a></li>
        </ul>
      </div>

    </div>

    
	
	<form method="post" action="Php/volunteerregvalidation.php" name="fm">
        <br>
		<br>
		<br>
		
	
        <table class="center">     
            <tr>
              <td>
			  
                <p>First Name</p>
                <input type="text" name="fname" placeholder="Enter first Name">
				<p id="fnameErr" style="color:red;font-size:13px"></p>
				
              </td>
            </tr>
      
            <tr>
              <td>
			  
                <p>Last Name</p>
                <input type="text" name="lname" placeholder="Enter Last Name">
				<p id="lnameErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
      
            <tr>
              <td>
			  
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email">
				<p id="emailErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
      
            <tr>
              <td>
			  
                <p>Institution</p>
                <input type="text" name="institution" placeholder="Enter Institution">
				<p id="institutionErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
			
			<tr>
              <td>
			  
                <p>Division</p>
                <select id="divisionList" name="division" onchange="load_District(this);"><?php
                   foreach($data as $r){?>
	               <option value="<?php echo $r["div_id"];?>">
	               <?php echo $r["div_name"];?>
	               </option><?php
                   }?>
                </select>
              </td>
            </tr>

			<tr>
              <td>
			  
                <p>District</p>
                <select id="districtList" name="districtList" onchange="load_Thana(this);">
                </select>
              </td>
            </tr>
			
			<tr>
              <td>
			  
                <p>Location</p>
                <select id="thanaList" name="thanaList" >
                </select>
              </td>
            </tr>
			
            <tr>
              <td>
			  
                <p>Date Of Birth</p>
                <input type="date" name="bday">
				<p id="bdayErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>

            <tr>
              <td>
			  
                <p>Gender</p><br>
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="other"> Other 
				<p id="genderErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>     
                    
            <tr>
              <td>
			     
				<br>
                <p>Time</p>
                <select name="time">
                <option value="first">9 am to 1 pm</option>
				<option value="second">1 pm to 5 pm</option>
			    <option value="third">5 pm to 9 pm</option>
			    
                </select>
              </td>
            </tr>   
					
            <tr>
              <td>
			  
                <p>Phone</p>
                <input type="text" name="phone" placeholder="Enter Phone">
				<p id="phoneErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>

            <tr>
              <td>
			  
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password">
				<p id="passErr" style="color:red;font-size:13px"></p>
                </td>
            </tr>     
                       
            <tr>
              <td>
			  
                <p>Confirm Password</p>
                <input type="password" name="cpass" placeholder="Enter Confirm Password">
				<p id="cpassErr" style="color:red;font-size:13px"></p>
              </td>
            </tr>
                       
            <tr>
              <td>
			  
                </br>
                <p style="text-align:center">
                <input type="submit" name="submit" onclick="return volunteer_validation();" value="Submit">
                </p>
              </td>
            </tr>
      
             <tr>
              <td>
			  
                </br>
                <a href="login.html">Already have Account</a>
			    <br>   
			    <br>               
			    <br>               
			    <br>  
              </td>
            </tr>
                       
                      
                   
        </table>               
              
    </form>



</body>
</html>