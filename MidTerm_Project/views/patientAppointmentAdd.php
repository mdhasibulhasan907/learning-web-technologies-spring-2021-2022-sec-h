<?php 

    require_once('header.php')

?>

<html>

<head>
    <title>ADD Patient Appointment</title>
</head>

<body>

    <form method="POST" action="../controller/patientAppointmentCheck.php">
        <fieldset>
            <legend>Appointment</legend>
            <table>
                <tr>
                   <td>Patient ID:</td>
                    <td>
                       
                        <input type="text" name="pid" Value="">
                       
                    </td>
                </tr>
                <tr>
                   <td>Doctor Name:</td>
                    <td>
                        <input type="text" name="p1" Value="">
                        
                    </td>
                </tr>
                <tr>
                   <td>Time:</td>
                    <td>
                        <input type="text" name="p2" Value="">
                       
                    </td>
                </tr>
            </table>





            <input type="submit" name="submit" Value="Add_Patient Appointment">
            
                <h4><a href="AdminHome.php">BACK</a>
                    <h4>
            




        </fieldset>

    </form>
</body>

</html>