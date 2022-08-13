<?php
	session_start();
require_once('../model/userModel.php');
	if(isset($_POST['edit']))
    {
           $pid= $_POST['pid'];
        $p1=$_POST['p1'];   
        $p2=$_POST["p2" ];
  
        if($_POST['pid' ] != "")
        {
            
            if($_POST['p1']!= "")
        {
            
            if($_POST["p2"] != ""  )
                  {
                      
                      
                      $appointment =[
                                'pid'=> $pid,    
                               'p1'=> $p1,
                               "p2"=>$p2,
                                                    
                              ];

                        $status= editAppointment($appointment);

                      if($status)
                      {
                          header('location: ../views/patientAppointment.php');
                      }
                      else
                      {
                          echo "<h1>unsuccessful!!!</h1>";
                      }
                      
                      
                      
                      
                      
                      
                  }     
            
            
            
        } 
            
            
            
        }
       
        
        
        
                   
    
   
 
    }
            

?>



                           
       
        