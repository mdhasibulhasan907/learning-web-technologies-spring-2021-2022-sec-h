<?php 

    require_once('header.php');
require('../model/userModel.php');
?>
<html>
    <head>
    <title>Patient Appointment</title>
    <link rel="stylesheet" type="text/css" href="../CSSAdmin/AppointL.css">
    </head>
    <body>
    <form method="POST" >
                            <center><h2>Patient Appointment List<h2></center>
                            <center><h4><a href="AdminHome.php">Back</a></center>
                            <center><h4><a href="Login.html">Logout</a></center>
                <table border="1" width="100%">
                    
                    <tr>
                        <td>Appointment Serial</td>
                        <td>Patient ID</td>
                        <td>Doctor name</td>
                        <td>time</td>
                        <th>ACTION</th>
                    </tr>
                    
                   <?php
            

            $result =getAllapponintment();
              while($appointment= mysqli_fetch_assoc($result))
            {  ?>
        
                        <tr>
                            
                            <td><?=$appointment['Asl']?></td>
                            <td><?=$appointment['PatientID']?></td>
                            <td><?=$appointment['DoctorName']?></td>
                            <td><?=$appointment["Time"]?></td>
                          
                            <td><a href="patientAppointmentAdd12.php?edit=<?=$appointment['Asl'] ?>">EDIT</a>||
                            <a href="RemoveAppointment.php?delete=<?=$appointment['Asl']?>">REMOVE</a></td>
                            
                            
                            
                         </tr>
         <?php
            }
        ?>
                    
                </table>

</form>
   </body>

</html>