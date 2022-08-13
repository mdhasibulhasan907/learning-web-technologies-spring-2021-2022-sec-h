<?php 
	session_start();
    require_once('../model/userModel.php');
	if(isset($_POST['submit']))
    {
        
        $Userid=$_POST['Userid'];
        $username=$_POST['username'];
        $email=$_POST['email'];   
        $date=$_POST['dateofbirth'] ;                    
        $gender=$_POST['gender'];                     
        $add=$_POST['address'];                   
        $password = $_POST['password'];                  
        
        if($_POST['Userid'] !="")
        {
           if($username != "" && strlen($username)>2 && ($username>='A' && $username<='Z' || $username>='a' && $username<='z') )
        {
			
                if($_POST["email" ] != "")
                {
				    if($_POST["dateofbirth" ] != "")
                    {
                         if(isset($_POST['gender']))
                        {
                            if($_POST['address']!= "" )
                            {
                                if($_POST['password']!= "")
                                {
                                    if($_POST['confirmpassword'] != "" &&  $_POST['password']==$_POST['confirmpassword'])
                                  {
                                         
                                $patient =[
                                'Userid'=> $Userid,    
                               'username'=> $username,
                               'email'=>$email,
                               'dateofbirth'=>$date,
                               'gender'=> $gender,
                               'address'=>$add,
                               'password'=>$password                      
                              ];

                        $status= addPatient($patient);

                      if($status)
                      {
                          header('location: ../views/PatientList.php');
                      }
                      else
                      {
                          echo "<h1>unsuccessful!!!</h1>";
                      }

                                                  
                                         
                                   }
//                                   else
//                                   {
//                                       echo "<h1>Invalid Confirm Password!!!</h1>";
//                                   }
                               }
//                               else
//                               {
//                                echo "<h1>Invalid Password!!!</h1>";  
//                               }
                           }
//                          else
//                            {
//                              echo "<h1>Invalid Address...</h1>";
//                            }

					
				}
//                else
//                {
//					echo "<h1>Invalid  Email!!</h1>";
//				}	
			
		}
//        else
//        {
//			echo " <h1>Invalid Username!!</h1>";
//		}  
        }
//        else
//        {
//            echo " <h1>Invalid Userid!!</h1>";
//        }
           
            
        
           
           }
	}
    }
?>