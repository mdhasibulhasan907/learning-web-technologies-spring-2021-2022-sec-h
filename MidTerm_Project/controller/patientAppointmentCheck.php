<?php
	session_start();

	if(isset($_POST['submit']))
    {
          
  
                        $myfile = fopen('../model/patientAppointment.txt', 'a');
                        $pApp = $_POST['pid']."|".$_POST['p1']."|".$_POST["p2" ]."\r\n";
    
                               fwrite($myfile, $pApp   );
                               fclose($myfile);
                               header('location: ../views/patientAppointment.php');
    
   
 
    }
            

?>