<?php 

    require_once('header.php')

?>

<html>
     <head>
          <title>Home</title>
          <link rel="stylesheet" type="text/css" href="../CSSAdmin/Home.css">
     </head>

     <body>

        <table border="3", width="100%">
               <tr><td colspan="3" align="center"><b>
                   <h1>welcome Admin</h1>
               </b></td></tr>
                <tr>
                    <td align="center"><img src="../asset/admin.jpg"  height ="400px" width="400px"><h3> Admin</h3></td>
                   
                    <td align="right"  width="1500px">
        
                        
                        <b><a href="AdminshowPro.php">Show Profile</a></b> |
                        
                        <b><a href="../controller/logout.php">LogOut</a></b>
                    </td>
               
        
                </tr>
                <tr height ="300px">
                   
                  <td width="200px" colspan="3" >
                      <table align="left" width="1000px" >
                           <tr >
                             <ul>
                            
                                <div>
                                  	 <td ><h3><a href="reg.php" class="c1" ><li class="c1"> Go to Add  patirnt</a></li> </h3></td>        
                             <td ><h3><a href="EditPro.php" class="c1"><li class="c1"> Update Patient profile</li></a></h3></td>
                             <td > <h3><a href="PatientList.php" class="c1"><li class="c1"> Patient List</li></a></h3></td> 
                              </div>             
                                        
                           </tr>
                           <tr>
                            <td><h3><a href="NoticeAdd.php" class="c1"><li class="c1"> add notice</li></a></h3></td> 
                            <td><h3><a href="Notice.php" class="c1"><li class="c1"> Show Notice</li></a></h3></td>  
                              
                            <td></td>             

                          </tr>
                          <tr>
                            <td><h3><a href="patientAppointmentAdd.php" class="c1"><li class="c1">Give appointment to patient</li></a></h3></td> 
                            <td><h3><a href="patientAppointment.php" class="c1"><li class="c1">Show Appointment List</li></a></h3></td>      

                          </tr>
                          <tr>
                            <td><h3><a href="jobCerculerAdd.php" class="c1"><li class="c1">Upload new Job Cerculer</li></a></h3></td>
                            <td></td>              

                          </tr>
                          <tr> 
                            <td><h3><a href="searchPatient.html" class="c1"><li class="c1">Search Patient</li></a></h3></td>
                            <td></td>             

                          </tr>
                                        
                                   
                          </ul>

                      </table>
                  </td>
                 
                </tr>
                
              

        </table>

     </body>




</html>