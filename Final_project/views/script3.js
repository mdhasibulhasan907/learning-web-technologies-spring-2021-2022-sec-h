function regvalidation(){
    var Userid = document.forms["myForm"]["Userid"].value;  
    var username = document.forms["myForm"]["username"].value;
    
    var email = document.forms["myForm"]["email"].value;
    var dateofbirth = document.forms["myForm"]["dateofbirth"].value;
    var Male = document.forms["myForm"]["Male"];
    var Female = document.forms["myForm"]["Female"];
    var Other = document.forms["myForm"]["Other"];
    var address = document.forms["myForm"]["address"].value;
    var password = document.forms["myForm"]["password"].value;
    
   var confirmpassword = document.forms["myForm"]["confirmpassword"].value;


    if (Userid  == "" || Userid .length < 5 ) {
      
        alert('Id: Null I or less then 5 digit');
        return false;
    }

    if (username == "") {
        
        alert('Name: Null value');
         return false;
    }
    else if(username.length<2 && (username>='A' && username<='Z' || username>='a' && username<='z'))
    {
        alert('Name: Contains at least two words');
        return false;
    }
    else if(username >='0'  &&username<='9' || username=='~' || username=='!' || username=='@' || username =='#' || username=='$' || username=='%' || username=='^' || username=='&' ||username=='*' ||username=='()'|| username=='/' )
    {
        alert('Name: Can contain a-zor A-Zor dot(.) or dash(-)');
        return false;
    }
    else if(username>='0' && username<='9')
   {
        alert('Name: Must be starts with letter');
   }
       
    if(email == ""){
        
        alert('Email: Null email');
        return false;
    }
    
    //Date validation
     if(dateofbirth == ''){
        alert('Date Of Birth : Enter Birth Date Please');
        return false;
    } 
    //Gender Validation 
     if(!Male.checked && !Female.checked && !Other.checked){
        alert('Gender : Select Any One ');
        return false;
    } 
    //Address Validation
     if(address == '')
     {
        alert('Adress : Can not be empty ');
        return false;
    } 
     //Password Validation
     if(password == '')
     {
        alert('password : Can not be empty ');
        return false;
    } 
    if( confirmpassword!=password )
     {
        alert("password and confirmpassword  doesn't match");
        return false;
    } 

     
    

}