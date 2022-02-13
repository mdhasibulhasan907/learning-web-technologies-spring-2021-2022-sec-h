<?php 

    
       $uerror = "";
       $myname = "";

       if(isset($_REQUEST['submit'])){

              if($_REQUEST['myname'] == null){
                     $uerror  = "invalid username...";
              }else{
                     $myname = $_REQUEST['myname'];
              }
       }      
        

?>


<html>
        <body>
             <form>
             <fieldset>
              
               <legend>BLOOD GROUP</legend>
                       <table>
                                 
                                
                                 
                                 
                                 <tr>
                                        
                                           <td colspan="4">
                                              <select>
                                               <option value="">A+</option>
                                               <option value="">B+</option>
                                               <option value="">o+</option>
                                               <option value="">A-+</option>
                                           

                                             </select>
                                         
                                    </td> 
                                           
                                           
                                 </tr>
                                 
                                 
                                 
                                 <tr>
                                      <td colspan="4"><hr></td>
                                 </tr>
                                 <tr>
                                        
                                        <td colspan="4"><input type="submit" name="submit" value="submit"></td>
                                 </tr>
                       </table>
                 </fieldset>     
            </form>     
        </body>
</html>