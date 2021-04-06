"use strict"

function ajax(){
	
	const data = document.getElementById('name').value;
	const xhttp = new XMLHttpRequest();
	/*xhttp.open('GET', 'abc.php?name='+data, true);
	xhttp.send();

	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//document.write(this.responseText);
			document.getElementById('myid').innerHTML = this.responseText;
		}
	}*/

	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//document.write(this.responseText);
			document.getElementById('result').innerHTML = this.responseText;
		}
	}
	xhttp.send('name='+data);

}