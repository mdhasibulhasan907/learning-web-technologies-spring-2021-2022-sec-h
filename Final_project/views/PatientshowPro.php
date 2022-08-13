<?php 

    require_once('header.php')

?>        
<html>
      <head>
           <title>Profile</title>
      </head>
      <body>
                  <table border="1" align ="center"  width="44%" height ="50%" >
                         <tr>
                            <td>
                            <?php echo $_POST['username'] ?> Welcome to Your Profile |
                                <b><a href="Home.php">Back</a></b> </td>

                            
                         </tr>
                         
                        </tr>
                        <tr>  
                           <td width="50px" >  UserId :  <?php echo $_COOKIE['loggedInId'] ?></td> 
                            </tr>
                         </tr>
                         <tr>  
                           <td width="50px" >  Name :  <?php echo $_COOKIE['loggedInUsername'] ?></td> 
                            </tr>
                         </tr>
                
                         
                         <tr> 
                            <td >Email:  <?php echo $_COOKIE['loggedEmail'] ?></td> 
                         </tr>               
                         <tr>  
                            <td colspan="2">Gender:  <?php echo $_COOKIE['loggedgender'] ?></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Date of bith: <?php echo $_COOKIE['loggedDate'] ?></td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Address:  <?php echo $_COOKIE['loggedadd'] ?></td> 
                        </tr>


                 </table>
      </body>
</html>