<?php
	session_start();

	if(isset($_POST['edit']))
    {
		
	
		
			

			require_once('../model/userModel.php');

			$pid=$_REQUEST['pid'];
			$p1=$_REQUEST['p1'];
			$p2=$_REQUEST["p2" ];
			
		
		
				$appointment =[
                                'pid'=> $pid,    
                               'p1'=> $p1,
                               "p2"=>$p2,
                               
                              ];
		
		
							   $status=editAppointment($appointment);
		
							   if($status)
							   {
								header('location: ../views/patientAppointment.php');
							   }
							   else
							   {
								   echo "Error";
							   }            
					   


                  
				    

		}
	
?>
