
        
        function moveOfJson(e){
    console.log(e);
e.preventDefault();
console.log("Form Submitted");

            let pid = document.getElementById('pid').value;
            let p1 = document.getElementById('p1').value;
            let p2 = document.getElementById('p2').value;
           
        

       

        
       
            var xhttp= new XMLHttpRequest();
            var json ={
                'pid' : pid,
                'p1': p1,
                'p2':p2,
                

             }

             var myjson=JSON.stringify(json);






             console.log(myjson);
             var xhttp= new XMLHttpRequest();

            xhttp.open('POST', '../controller/patientAppointmentCheck1.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send(`data= ${myjson}`);
        




         xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200){
            // document.getElementById('t1').innerHTML = "DONE";
            alert(this.responseText);
        }
     }
        
        
        }
  