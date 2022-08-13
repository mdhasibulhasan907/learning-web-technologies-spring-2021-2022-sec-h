<?php
	session_start();
require('../model/userModel.php');
    
    $Asl= $_REQUEST['delete'];
   //$patient = getPatientByPsl($Psl);

   if(isset($Asl))
   {
       $result=deleteAppointment($Asl);
//print_r($result);
       
       if($result)
       {
        header('location: ../views/patientAppointment.php');
       }
       else
       {
          echo "error";
       }
     
       
   }
    
//print_r($patient);


?>