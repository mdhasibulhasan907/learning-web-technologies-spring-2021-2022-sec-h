function ajax(){

	var name = document.getElementById('name').value;
	var xhttp= new XMLHttpRequest();

	
	xhttp.open('POST', '../controller/searchPatients.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);

	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('d1').innerHTML = this.responseText;		
		}
	}
}