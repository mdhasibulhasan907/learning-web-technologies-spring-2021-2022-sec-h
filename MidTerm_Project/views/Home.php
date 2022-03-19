<?php 

    require_once('header.php')

?>

<html>
     <head>
          <title>Home</title>
     </head>

     <body>

        <table border="1", width="100%">
                <tr>
                    
                    
                    <td align="right" width="1500px">
                        <b>Welcome <?php echo $_COOKIE['loggedInUsername'] ?></b>|
                        <b><a href="PatientshowPro.php">Show Profile</a></b> |
                        <b><a href="../controller/logout.php">LogOut</a></b>
                    </td>

        
                </tr>
                <tr height ="500px">
                  
                  <td width="200px" colspan="3" >
                      <table align="left" width="1000px" >
                           <tr>
                             <ul>
                             <td ><h3><a href="../views/JobCer.php" ><li> Show job cerculerr</a></li> </h3></td>        
                             <td><h3><a href="../views/Notice.php"><li> Notice here</li></a></h3></td>
                                               
                                        
                         
                                         
                                   
                          </ul>

                      </table>
                  </td>
                 
                </tr>
                

              

        </table>

     </body>




</html>