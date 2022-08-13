<?php 
	require_once('db.php');




function Admin_validate($userId, $password){
		$con = getConnection();
		$sql= "select * from admininfo where userId='{$userId}' and password='{$password}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}

function Patient_validate($userid, $password1){
		$con = getConnection();
		$sql= "select * from patientinfo where Userid='{$userid}' and password='{$password1}'";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);

		if($user){
			return true;
		}else{
			return false;
		}
	}



	

	function  addPatient($patient){
		$con = getConnection();
		$sql= "insert into patientinfo      values('','{$patient['Userid']}','{$patient['username']}','{$patient['email']}','{$patient['dateofbirth']}','{$patient['gender']}','{$patient['address']}','{$patient['password']}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}

   function  addAppointment($appointment){
		$con = getConnection();
		$sql= "insert into appointmentinfo      values('','{$appointment['pid']}','{$appointment['p1']}','{$appointment["p2"]}')";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}






   
   

	
       function getAllpatients(){
		$con = getConnection();
		$sql= "select * from patientinfo";
		$result = mysqli_query($con, $sql);
		return $result;
	}


       function getAllapponintment(){
		$con = getConnection();
		$sql= "select * from appointmentinfo";
		$result = mysqli_query($con, $sql);
		return $result;
	}



	function getPatientByPsl($psl){
		$con = getConnection();
		$sql= "select * from patientinfo where Pserial={$psl}";
		$result = mysqli_query($con, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}




function Updatepatient($patient){
		$con = getConnection();
		$sql= "update patientinfo set username='{$patient['username1']}',   email='{$patient['email1']}',dateofbirth='{$patient['dateofbirth1']}',gender='{$patient['gender1']}',address='{$patient['address1']}',password='{$patient['password1']}'  where Userid={$patient['userid1']}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
	}


	
    
     function editAppointment($appointment)
     {

        $con = getConnection();
		$sql= "update appointmentinfo set DoctorName='{$appointment['p1']}', Time='{$appointment["p2"]}'  where PatientID={$appointment['pid']} ";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}




     }

	







	function deletepatient($Psl){
		$con = getConnection();
		$sql= "delete from patientinfo where Pserial={$Psl}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
        
        $result=mysqli_query($con, $sql);

        return $result;
    }




    function deleteAppointment($Asl){
		$con = getConnection();
		$sql= "delete from appointmentinfo where Asl={$Asl}";
		
		if(mysqli_query($con, $sql)){
			return true;
		}else{
			return false;
		}
        
        $result=mysqli_query($con, $sql);

        return $result;
    }


?>