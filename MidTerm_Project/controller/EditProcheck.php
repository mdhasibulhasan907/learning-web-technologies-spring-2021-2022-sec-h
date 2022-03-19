<?php
	session_start();

	if(isset($_POST['edit']))
    {
		
		if($_POST['userid1'] != ""  )
		{
			$myfile = fopen('../model/User.txt', 'a');
                 $user = $_POST['username1']."|".$_POST["email1"]."|".$_POST["date1" ]."|".$_POST["gender1" ]."|".$_POST['add1']."|".$_POST['password1']."|".";"."\r\n";

                     fwrite($myfile, $user);
                     fclose($myfile);
					   


                     header('location: ../views/AdminHome.php');
				    

		}
	}
?>