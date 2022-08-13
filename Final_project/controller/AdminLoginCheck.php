<?php
	session_start();
require_once('../model/userModel.php');

	if(isset($_POST['submit']))
    {
		
        //$userId = $_POST['userId'];
        $userid=$_POST['userid'];
		//$password = $_POST['password'];
        $password1 = $_POST['password1'];
		if( $userid != "")
		{
			if($password1 != "")
			{
				
                
               $status = Admin_validate($userid, $password1);
				
				if($status)
                {
					setcookie('flag', 'true', time()+3600, '/');
                     setcookie('userid',$userid,time()+3600,'/');
                    setcookie('password1',$password1,time()+3600,'/');
					header('location: ../views/AdminHome.php');
                  
                        

                       
                        
				}else{
					echo "invalid username/password";
				}
				


			}
			else
			{
				echo "<h1>Invalid Admin Password...</h1>";
			}
		}
        else
			{
				echo "<h1>Invalid usewrid...</h1>";
			}
        
    
        
		
        
         if( $userid != "")
		{
			if($password1 != "")
			{
				
                
               $status = Patient_validate($userid, $password1);
				
				if($status)
                {
					setcookie('flag', 'true', time()+3600, '/');
					header('location: ../views/Home.php');
				}else{
					echo "Try again";
				}
				


			}
			else
			{
				echo "<h1>Invalid Password...</h1>";
			}
		}
	}
?>