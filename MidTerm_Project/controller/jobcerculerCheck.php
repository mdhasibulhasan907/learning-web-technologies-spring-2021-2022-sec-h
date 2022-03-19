<?php
  session_start();

     $des ="../asset/jobcerculer/". $_FILES['myfileE']['name'];
     $src=$_FILES['myfileE']["tmp_name"];

     if(move_uploaded_file($src,$des))
     {
          
          $_SESSION['Job']=$_FILES['myfileE']['name'];
          header('location:../views/JobCer.php');
     }
?>