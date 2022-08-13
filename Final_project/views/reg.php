<?php 
	include('header.php');
//include('../controller/RegCheck.php');
?>




<!DOCTYPE html>
<html>
<head>
	<title>REGSTRATION PAGE</title>
	<link rel="stylesheet" type="text/css" href="../CSSAdmin/reg.css">
</head>
<body >

	<form class="t2" name="myForm" method="post" action="../controller/RegCheck.php" enctype="multipart/form-data" onsubmit="return regvalidation()">
		
		  <table class="t1" border="3" align="center" width="700px" height="330px">

           

                <tr>
                    <td align="center">
                        <legend><b>PATIENT Adding FORM</b></legend>
			
			        <table class="t1">
			       
				        <tr>
					      <td><b>Userid:</b></td>
				          <td><input type="text" name="Userid" id="Userid" class="t2" placeholder="Enter userid" value=""></td>
				        </tr>
				       

				        
				        
				       <tr>
					      <td><b>Username:</b></td>
				          <td><input type="text" name="username" id="username"  class="t2"  placeholder="Enter username" value=""></td>
				        </tr>
                
				        <tr>
					        <td><b>Email:</b></td>
					        <td><input type="email" name="email" id="email" class="t2" placeholder="Enter email" value=""></td>
				        </tr>
                        <tr>
					        <td><b>Date of Birth:</b></td>
					        <td><input type="date" name="dateofbirth" id="dateofbirth" class="t2" placeholder="Enter date of birth" value="date"></td><hr/>
							
				        </tr>
                        <tr>
					        <td><b>Gender:</b></td>
					        <td>
                                <input type="radio" name="gender" id="Male" value="Male"><b>Male</b>
                                <input type="radio" name="gender" id="Female" value="Female"><b>Female</b>
                                <input type="radio" name="gender" id="Other" value="Other"><b>Other</b>
								
                            </td>
				        </tr>
                        </tr>
                        <tr>
                           <td><b>Address:</b></td>
                           <td><input type="text" name="address" id="address"  placeholder="Enter address" class="t2" value=""></td>
                       </tr>
                       <tr>
                        <tr>
					        <td><b>Password:</b></td>
					        <td><input type="password" name="password" id="password" class="t2" placeholder="Enter  password" value=""></td>
				        </tr>
                        <tr>
					        <td><b>Confirm Password:</b></td>
					        <td><input type="password" name="confirmpassword" id="confirmpassword" placeholder="Enter confirm password" class="t2" value=""></td>
				        </tr>
                        
				       
                        <tr>
					        <td colspan="2"><input type="submit" name="submit" class="t1" value="submit"  >
                                <a href="Login.html">Login</a>
                                <a href="AdminHome.php">Back</a
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
	<script type="text/javascript" src="script3.js"></script>
</body>
</html>