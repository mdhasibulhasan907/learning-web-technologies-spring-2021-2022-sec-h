<?php 

    require_once('header.php')

?>
<html>
    <head>
    <title>Patient Appointment</title>
    </head>
    <body>
    <form method="POST" >
                            <center><h2>Patient Appointment List<h2></center>
                            <center><h4><a href="AdminHome.php">Back</a></center>
                            <center><h4><a href="Login.html">Logout</a></center>
                <table border="1" width="100%">
                    
                    <tr>
                        <td>Patient Name</td>
                        <td>Doctor name</td>
                        <td>time</td>
                        
                    </tr>
                    
                    <?php
                               $myfile= fopen('../model/patientAppointment.txt', 'r');
                                if($myfile=='')
                                {
                                               echo' <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    
                                                </tr>';                               
                                      
                                }
                                else
                                {
                                   
                                while (!feof($myfile)) {
                                    $data = fgets($myfile);
                                    if ($data != "") {
                                        $pApp  = explode('|', $data);
                                            echo '
                                                <tr>
                                                    <td>' . trim($pApp [0]) . '</td>
                                                    <td>' . trim($pApp [1]) . '</td>
                                                    <td>' . trim($pApp [2]) . '</td>
                                                    
                                                </tr>';
                                        
                                       }

 
                                    }
                                }
                                ?>
                                

                                    </td>

                    </tr>
                    
                </table>

</form>
   </body>

</html>