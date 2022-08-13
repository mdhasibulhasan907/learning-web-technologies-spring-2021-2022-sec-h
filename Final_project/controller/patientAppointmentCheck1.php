<?php
	session_start();
require_once('../model/userModel.php');

	// if(isset($_POST['submit']))
 //    {
 //           $pid= $_POST['pid'];
 //        $p1=$_POST['p1'];   
 //        $p2=$_POST["p2" ];
  
 //        if($_POST['pid' ] != "")
 //        {
            
 //            if($_POST['p1']!= "")
 //        {
            
 //            if($_POST["p2"] != ""  )
 //                  {
                      
                      
 //                      $appointment =[
 //                                'pid'=> $pid,    
 //                               'p1'=> $p1,
 //                               "p2"=>$p2,
                                                    
 //                              ];

 //                        $status= addAppointment($appointment);

 //                      if($status)
 //                      {
 //                          header('location: ../views/patientAppointment.php');
 //                      }
 //                      else
 //                      {
 //                          echo "<h1>unsuccessful!!!</h1>";
 //                      }
                      
                $mjson = $_REQUEST['data'];    
        $json = json_decode($mjson );
         // $json =json_encode($mjson );
         // echo $json;
        $pid=$json->pid;
         $p1=$json->p1;
        $p2=$json->p2;

        // echo $pid."/".$p1."/".$p2;
        

 

//                           $appointment= [
//                           'pid'=>$json->pid,
//                           'p1'=>$json->p1,
//                           'p2'=>$json->p2,
                         
//                           ];

//                         $status= addAppointment($appointment);
// // header('location: ../views/patientAppointment1.php');
//                       if($status)
//                       {
//                           // header('location: ../views/patientAppointment1.php');
//                         echo "successful appointmernt addeed";
//                       }
//                       else
//                       {
//                           echo "unsuccessful!!!";
//                       }
                      

                      if($pid!=""){

                         if($p1!=""){

                          if($p2!=""){

                          $appointment= [
                          'pid'=>$pid,
                          'p1'=>$p1,
                          'p2'=>$p2,
                         
                          ];

                        $status= addAppointment($appointment);
// header('location: ../views/patientAppointment1.php');
                      if($status)
                      {
                          // header('location: ../views/patientAppointment1.php');
                        echo "successful appointmernt addeed";
                      }
                      else
                      {
                          echo "unsuccessful!!!";
                      }
                      


                      }
                          else
                        {
                        echo "Null time submitted please write";
                        }
                        



                      }
                         else
                        {
                        echo "Null doctor name submitted please write";
                        }


                      }
                      else
                      {
                        echo "Null Patient is submitted please write";
                      }
                      
                      
                      
 //                  }     
            
            
            
 //        } 
            
            
            
 //        }
       
        
        
        
                   
    
   
 
 //    }
            

?>