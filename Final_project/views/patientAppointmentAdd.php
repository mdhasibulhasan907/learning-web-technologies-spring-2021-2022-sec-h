<?php 

    require_once('header.php')

?>

<html>

<head>
    <title>ADD Patient Appointment</title>
    <link rel="stylesheet" type="text/css" href="../CSSAdmin/Appointment.css">
</head>

<body>

    <form method="POST" onSubmit="moveOfJson(event)" >
        <fieldset>
            <legend>Appointment</legend>
            <table>
                <tr>
                   <td>Patient ID:</td>
                    <td>
                       
                        <input type="text" name="pid" id="pid" placeholder="Enter patient id" Value="">
                       
                    </td>
                </tr>
                <tr>
                   <td>Doctor Name:</td>
                    <td>
                        <input type="text" name="p1" id="p1" placeholder="Enter doctor name" Value="">
                        
                    </td>
                </tr>
                <tr>
                   <td>Time:</td>
                    <td>
                        <input type="text" name="p2" id="p2" placeholder="Enter time" Value="">
                       
                    </td>
                </tr>
            </table>





            <input type="submit"  name="submit" Value="Add_Patient Appointment">
            
                <h4><a href="AdminHome.php">BACK</a>
                    <h4>
            




        </fieldset>

    </form>
    <script type="text/javascript" src="script4.js"></script>
   
</body>

</html>