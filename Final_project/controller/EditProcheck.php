<?php
	session_start();

	if(isset($_POST['edit']))
    {
		
		if($_POST['userid1'] != "" )
		{
			

			require_once('../model/userModel.php');

			$Userid=$_REQUEST['userid1'];
			$username=$_REQUEST['username1'];
			$email=$_REQUEST["email1" ];
			$date=$_REQUEST['dateofbirth1'];
			$gender=$_REQUEST['gender1'];
			$add=$_REQUEST['address1'];
			$password=$_REQUEST['password1'];
		
		
				$patient =[
                                'userid1'=> $Userid,    
                               'username1'=> $username,
                               'email1'=>$email,
                               'dateofbirth1'=>$date,
                               'gender1'=> $gender,
                               'address1'=>$add,
                               'password1'=>$password,
                            
                              ];
		
		
							   $status=Updatepatient($patient);
		
							   if($status)
							   {
								header('location: ../views/PatientList.php');
							   }
							   else
							   {
								   echo "Error";
							   }            
					   


                  
				    

		}
	}
?>


