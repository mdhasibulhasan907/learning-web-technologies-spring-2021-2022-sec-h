<?php 

    require_once('header.php')

?>

<html>

      <head>
      <title>Edit Profile</title>
      </head>

      <body>

	<form method="post" action="../controller/EditProcheck.php">
		
		  <table border="3" align="center" width="700px" height="330px">

           

                <tr>
                    <td align="center">
                        <legend><b> Edit PATIENT FORM</b></legend>
			
			        <table>
			       
				       <tr>
					      <td><b>UserID:</b></td>
				          <td><input type="text" name="userid1" value=""></td>
				        </tr>
				       
				       <tr>
					      <td><b>Username:</b></td>
				          <td><input type="text" name="username1" value=""></td>
				        </tr>
                
				        <tr>
					        <td><b>Email:</b></td>
					        <td><input type="email" name="email1" value=""></td>
				        </tr>
                        <tr>
					        <td><b>Date of Birth:</b></td>
					        <td><input type="date" name="date1" value="date"></td><hr/>
							
				        </tr>
                        <tr>
					        <td><b>Gender:</b></td>
					        <td>
                                <input type="radio" name="gender1" value="Male"><b>Male</b>
                                <input type="radio" name="gender1" value="Female"><b>Female</b>
                                <input type="radio" name="gender1" value="Other"><b>Other</b>
								
                            </td>
				        </tr>
                        </tr>
                        <tr>
                           <td><b>Address:</b></td>
                           <td><input type="text" name="add1" value=""></td>
                       </tr>
                       <tr>
                        <tr>
					        <td><b>Password:</b></td>
					        <td><input type="password" name="password1" value=""></td>
				        </tr>
                        <tr>
					        <td><b>Confirm Password:</b></td>
					        <td><input type="password" name="confirmpassword1" value=""></td>
				        </tr>
                        
				       
                        <tr>
					        <td colspan="2"><input type="submit" name="edit" value="Edit">
                                <a href="AdminHome.php">Back</a>
                            </td>
					        
				        </tr>
			         </table>
                    </td>
                </tr>
            </table>

	</form>
</body>
</html>