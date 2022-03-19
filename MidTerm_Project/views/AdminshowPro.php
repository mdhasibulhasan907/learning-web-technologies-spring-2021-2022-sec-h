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
                            <td align="Left"  colspan="2" ><img src="../asset/admin.jpg" height ="100px" width="100px">
                            <?php echo $_COOKIE['userid'] ?> Welcome to Your Profile |
                             <b><a href="AdminHome.php">Back</a></b> 

                            
                         </tr>
                         
                        </tr>
                         <tr>  
                           <td width="50px" >  Name :  Md. Hasibul Hasan </td> 
                             </td>  </tr>
                         </tr>
                
                        
                         <tr> 
                            <td >Email:  Hasibul@gmail.com </td> 
                         </tr>               
                         <tr>  
                            <td colspan="2">Gender: Male </td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Date of bith: 16/02/1999  </td> 
                        </tr>
                        <tr>  
                            <td colspan="2" >Address: 91, uttora </td> 
                        </tr>


                 </table>
      </body>
</html>