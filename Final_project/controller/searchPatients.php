<?php 
require('../views/header.php');


	$search = $_REQUEST['name'];

       $con = mysqli_connect('localhost', 'root', '', 'ERPhospital');

        $sql="select * from patientinfo where username like '%{$search}%'";
        $result=mysqli_query($con, $sql);
        


	$data = "<table border=1>
				 <th>PSERIAl</th>
			<th>USERID</th>
			<th>USERNAME</th>
			<th>EMAIL</th>
            <th>GENDER</th>
            <th>DATE OF BIRTH</th>
            <th>ADDRESS</th>
		
           
             ";

	while ($patient = mysqli_fetch_assoc($result)) {
		$data .= 	"<tr>
						<td>{$patient['Pserial']}</td>
						    <td>{$patient['Userid']}</td>
						    <td>{$patient['username']}</td>
						    <td>{$patient['email']}</td>
                            <td>{$patient['gender']}</td>
                            <td>{$patient['dateofbirth']}</td>
                            <td>{$patient['address']}</td>
                        
				
                        
					</tr>";
}
	$data .= "</table>";
	echo $data;
?>