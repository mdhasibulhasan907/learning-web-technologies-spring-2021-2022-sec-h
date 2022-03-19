<!DOCTYPE html>
<html>
<head>
	<title>Patient List</title>
</head>
<body>
	<center>	
		<a href="Adminhome.php">Back </a> |
		<a href="../controller/logout.php">logout </a> 
	</center>
	<br>
	<table border="1" align="center">
		<tr>
			
			<th>USERID</th>
			<th>USERNAME</th>
            <th>EMAIL</th>
            <th>DATE OF BIRTH</th>
            <th>GENDER</th>
            <th>ADDRESS</th>
			<th>ACTION</th>
		</tr>
		<?php
		    $myfile2 = fopen('../model/User.txt','r');
		    //$count =0;<td>' . ++$count . '</td>
			
			while (!feof($myfile2)) {
				$data = fgets($myfile2);
				if($data!="")
				{
					$user = explode('|', $data);
		
					echo '<tr>
						    
						    <td>' . $user[0] . '</td>
						    <td>' . $user[1] . '</td>
						    <td>' . $user[2] . '</td>
                            <td>' . $user[3] . '</td>
                            <td>' . $user[4] . '</td>
                            <td>' . $user[5] . '</td>
						    <td>
							<a href="edit.php?id='.$user[0].'"> EDIT</a> |
							<a href="delete.php?id='.$user[0].'"> DELETE</a>
						    </td>
					     </tr>';
				}
			}
			fclose($myfile2);
		?>
	</table>
</body>
</html>