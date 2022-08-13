<?php 

    require('header.php');
	require('../model/userModel.php');

?>


<!DOCTYPE html>
<html>
<head>
	<title>Patient List</title>
	<link rel="stylesheet" type="text/css" href="../CSSAdmin/patientL.css">
</head>
<body>
	<center>	
		<a href="Adminhome.php">Back </a> |
		<a href="../controller/logout.php">logout </a> 
	</center>
	<br>
	<table  border="1" align="center">
		<tr class="t1">
			<th>PSERIAl</th>
			<th>USERID</th>
			<th>USERNAME</th>
            <th>EMAIL</th>
            <th>GENDER</th>
            <th>DATE OF BIRTH</th>
            <th>ADDRESS</th>
			<th>ACTION</th>
		</tr>
		
       <?php
		    

			$result =getAllpatients();
		      while($patient= mysqli_fetch_assoc($result))
            {  ?>
		
					    <t class="t2">
						    <td><?=$patient['Pserial']?></td>
						    <td><?=$patient['Userid']?></td>
						    <td><?=$patient['username']?></td>
						    <td><?=$patient['email']?></td>
                            <td><?=$patient['gender']?></td>
                            <td><?=$patient['dateofbirth']?></td>
                            <td><?=$patient['address']?></td>
                            
<!--
							<td><a href="Edit_TSP.php?edit=<?=$patient['Pserial'] ?>">EDIT</a>||
							<a href="RemovePatient.php?delete=<?=$patient['Pserial']?>">REMOVE</a></td>
						    
						    </td>
-->
						    
						    
						    <td>
							<a href="RemovePatient.php?delete=<?=$patient['Pserial']?>">REMOVE</a></td>
					     </tr>
		 <?php
            }
		?>
		
	</table>
</body>
</html>