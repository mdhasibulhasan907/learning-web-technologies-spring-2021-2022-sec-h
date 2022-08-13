<?php
  session_start();
require_once('../model/userModel.php');


                      
                $mjson = $_REQUEST['data'];    
        $json = json_decode($mjson );

        $Userid1=$json->Userid1;
         $username1=$json->username1;
         $email1=$json->email1;
        $dateofbirth1=$json->dateofbirth1;
        
         $Male1=$json->Male1;
        $Female1=$json->Female1;
         $Other1=$json->Other1;
         $address1=$json->address1;
         $password1=$json->password1;


               
               
               if($Userid1!="")
               {

                     if($username1!="")
                     {
                          if($email1!="")
                          {


                            if($dateofbirth1!="")
                          {
                              if($Male1!="" ||  $Female1!="" || $Other1!="")
                          {
                               if( $address1!="") 
                               {
                                      if($password1!="")
                                      {
                                                  $appointment= [
                          'pid'=>$Userid1,
                          'p1'=>$username1,
                          'p2'=>$email1,

                          'pid'=>$dateofbirth1,
                          'p1'=>$Male1,
                          'p2'=> $Female1,

                          'pid'=>$Other1,
                          'p1'=>$username1,
                          'p2'=>$email1,
                         
                          ];

                        $status= addAppointment($appointment);

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
                                        echo "Null password submitted ";
                                      }
                               }
                               else
                               {
                                echo "Null adddress submitted ";
                               }
                          }
                          else
                          {
                             echo "Null gender submitted ";
                          }

                          }  
                          }
                          else
                          {
                             echo "Null date of birth submitted please write";
                          }

                          }
                          else
                          {
                             echo "Null email submitted please write";
                          }
                     }
                     else
                     {
                      echo "Null username submitted please write";
                     }


               }
               else
               {
                echo "Null Userid submitted please write";
               }
              
             
                              
                
                      

                      // if($pid!=""){

                      //    if($p1!=""){

                      //     if($p2!=""){

                      //     $appointment= [
                      //     'pid'=>$pid,
                      //     'p1'=>$p1,
                      //     'p2'=>$p2,
                         
                      //     ];

                      //   $status= addAppointment($appointment);

                      // if($status)
                      // {
                      //     // header('location: ../views/patientAppointment1.php');
                      //   echo "successful appointmernt addeed";
                      // }
                      // else
                      // {
                      //     echo "unsuccessful!!!";
                      // }
                      


                      // }
                      //     else
                      //   {
                      //   echo "Null time submitted please write";
                      //   }
                        



                      // }
                      //    else
                      //   {
                      //   echo "Null doctor name submitted please write";
                      //   }


                      // }
                      // else
                      // {
                      //   echo "Null Patient is submitted please write";
                      // }
                      
                      
                      
 
            

?>