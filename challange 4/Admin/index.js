window.addEventListener("load", LoadDBConnection);


function LoadDBConnection() {
	// Php request


		var xmlhttp = new XMLHttpRequest();
		
		    xmlhttp.onreadystatechange = function() {
		      if (this.readyState == 4 && this.status == 200) {
		        var Response = this.responseText;
		       
		      }
		    }
		    xmlhttp.open("GET", "/Server.php?q=", true);
		    xmlhttp.send();				

}



async function AddItem() {
	/*let formData = new FormData(); 
  formData.append("file", file.files[0]);
  await fetch('/admin/Connection.php', {
    method: "POST", 
    body: formData
  }); 
  alert('The file has been uploaded successfully.');*/
}


function UpdateSTock() {
	alert("Updated Item");
}