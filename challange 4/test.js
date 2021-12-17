
/*window.addEventListener("load", LoadMenu);


function LoadMenu() {




	


	// Php request


		var xmlhttp = new XMLHttpRequest();
		
		    xmlhttp.onreadystatechange = function() {
		      if (this.readyState == 4 && this.status == 200) {
		        var Response = this.responseText;
		        console.log(Response);
		        var idk = Response.split(',');

		        console.log(idk);

		        let items = [
            
		        ],
		        test = "idk";


		        idk.forEach(function (item){
		            
		            items.push(item);
		           

		        });

		        items.pop()

		        console.log(items);
				items.forEach(function (Item){

					 let Content = document.createElement('div');
					        let H = document.createElement('h1');
					        let P = document.createElement('p');

					        ul.appendChild(Content);
					        Content.appendChild(H);
					        Content.appendChild(P);

					        H.id = Item+"-Info";

					        Content.className = "ItemMenu";

			                
			                console.log(Item);


				xmlhttp.onreadystatechange = function() {
			        if (this.readyState == 4 && this.status == 200) {

			          	var response = this.responseText;
			            console.log(response);
			            console.log(Item);
			            
						var field = response.split(':');
			            var Name = field[2];
			            var Cost = field[3];
			            var Stock = field[4];

			            H.innerHTML += Item;
					    P.innerHTML += Item;

			               
					        
			            
			          }
			    }
			        
			    xmlhttp.open("GET", "/Server.php?q="+ Item);
			    xmlhttp.send();

				});

				

		      }
		    }
		    xmlhttp.open("GET", "/Server.php?q=", true);
		    xmlhttp.send();

		    ul = document.createElement('ul');
			document.getElementById('DatabaseContent').appendChild(ul);
		   

				

}