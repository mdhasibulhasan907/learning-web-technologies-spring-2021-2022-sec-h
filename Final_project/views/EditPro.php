<?php 

    require_once('header.php')

?>

<html>

      <head>
      <title>Edit Profile</title>
      <link rel="stylesheet" type="text/css" href="../CSSAdmin/reg.css">
      </head>

      <body>

	<form form="myForm" class="t2" method="post" action="../controller/EditProcheck.php" onsubmit ="return updatePro()">
		
		  <table class="t1" border="3" align="center" width="700px" height="330px">

           

                <tr>
                    <td align="center">
                        <legend><b> Edit PATIENT FORM</b></legend>
			
			        <table class="t1">
			       
				       <tr>
					      <td><b>UserID:</b></td>
				          <td><input type="text" name="userid1" id="userid1" class="t2" placeholder="Enter userid" value=""></td>
				        </tr>
				       
				       <tr>
					      <td><b>Username:</b></td>
				          <td><input type="text" name="username1" id="username1" class="t2" placeholder="Enter username" value=""></td>
				        </tr>
                
				        <tr>
					        <td><b>Email:</b></td>
					        <td><input type="email" name="email1" id="email1" class="t2" placeholder="Enter email"  value=""></td>
				        </tr>
                        <tr>
					        <td><b>Date of Birth:</b></td>
					        <td><input type="date" name="dateofbirth1" id="dateofbirth1"  class="t2" placeholder="Enter date of birth" value="date"></td><hr/>
							
				        </tr>
                        <tr>
					        <td><b>Gender:</b></td>
					        <td>
                                <input type="radio" name="gender1" id="Male1" value="Male1"><b>Male</b>
                                <input type="radio" name="gender1" id="Female1" value="Female1"><b>Female</b>
                                <input type="radio" name="gender1" id="Other1" value="Other1"><b>Other</b>
								
                            </td>
				        </tr>
                        </tr>
                        <tr>
                           <td><b>Address:</b></td>
                           <td><input type="text" name="address1" id="address1" class="t2"  placeholder="Enter address" value=""></td>
                       </tr>
                       <tr>
                        <tr>
					        <td><b>Password:</b></td>
					        <td><input type="password" name="password1" id="password1" class="t2" placeholder="Enter password" value=""></td>
				        </tr>
                        
				       
                        <tr>
					        <td colspan="2"><input type="submit" class="t1"  name="edit"  value="Edit">
                                <a href="AdminHome.php">Back</a>
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>

	<script type="text/javascript" src="script2.js"></script>
</body>
</html>