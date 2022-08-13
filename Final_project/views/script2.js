
    
    
    function updatePro(e){
    
       console.log(e);
e.preventDefault();
console.log("Form Submitted");

var Userid = document.getElementById("Userid1").value;  
    var username = document.getElementById("username1").value;              
    
    var email = document.getElementById("email1").value;  
    var dateofbirth = document.getElementById("dateofbirth1").value;  
    var Male = document.getElementById("Male1");  
    var Female = document.getElementById("Female1");  
    var Other = document.getElementById("Other1");  
    var address = document.getElementById("address1").value;  
    var password = document.getElementById("password1").value;  
   


    // var xhttp= new XMLHttpRequest();
    //         var json ={
    //             'Userid1' : Userid1,
    //             'username1': username1,
    //             'dateofbirth1' : dateofbirth1,
    //             'email1' : email1,
    //             'Male1':Male1,
    //             'Female1':Female1,
    //             'Other1':Other1,               
    //             'address1': address1,
    //             'password1':password1,
                

    //          }

    //          var myjson=JSON.stringify(json);






    //          console.log(myjson);
    //          var xhttp= new XMLHttpRequest();

    //         xhttp.open('POST', '../controller/patientAppointmentCheck1.php', true);
    //         xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    //         xhttp.send(`data= ${myjson}`);
    //         // xhttp.send('email='+email);
    //         // xhttp.send('password='+password);
    //         // xhttp.send('usertype='+usertype);




    //      xhttp.onreadystatechange = function(){

    //     if(this.readyState == 4 && this.status == 200){
    //         // document.getElementById('t1').innerHTML = "DONE";
    //         alert(this.responseText);
    //     }
    //  }
    
    

}
    
    
    
    
    
    
    
  