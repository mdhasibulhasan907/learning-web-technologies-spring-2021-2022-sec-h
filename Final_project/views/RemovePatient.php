<?php
	session_start();
require('../model/userModel.php');
    
    $Psl= $_REQUEST['delete'];
   //$patient = getPatientByPsl($Psl);

   if(isset($Psl))
   {
       $result=deletepatient($Psl);
//print_r($result);
       
       if($result)
       {
        header('location:PatientList.php');
       }
       else
       {
          echo "error";
       }
     
       
   }
    
//print_r($patient);


?>


