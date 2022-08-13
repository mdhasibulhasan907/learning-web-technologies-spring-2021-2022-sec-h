<html> 
    <head>
        <meta chaset="utf-8">
        <link rel="stylesheet" type="text/css" href="../CSSAdmin/job.css">
    </head>
    <body>
        <form method="POST" action="../controller/jobcerculerCheck.php" enctype="multipart/form-data">
        
        
        <center>
            
            <table border='1'>
               <tr>
                   <td colspan="2" align='left'><h4><a href="AdminHome.php">Back</a>||<a href="JobCer.php">Show Cerculer</a></h4></td>
               </tr>
                <tr>
                    <td> Job Cerculer:</td>
                    <td><input type="file" name="myfileE" id="myfileE" value=""></td>
                </tr>
                <tr>
                    <td><input type="submit" name="Submit1" onclick="return job()" value="Submit"></td>
                </tr>
            </table>
             
        
           
           
        </center>   
       </form>
         <script type="text/javascript" src="scriptjob.js"></script>
    </body>
</html>