window.addEventListener("load", LoadMenu);


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
					        let h = document.createElement('h2');
					        let P = document.createElement('p');
					        let img = document.createElement('Img');
					        let div = document.createElement('div');
					        let btn = document.createElement('input');

					        ul.appendChild(Content);
					        Content.appendChild(div);
					        div.appendChild(H);
					        div.appendChild(h);
					        div.appendChild(P);
					        Content.appendChild(img);
					        

					        H.id = "NameItem";

					        Content.className = "ItemMenu";

			                
			                console.log(Item);


			                let httpRequest = new XMLHttpRequest();
						      if (!httpRequest) {
						        alert("can not create http instance!");
						        return false;
						      }
						      httpRequest.onreadystatechange = streams;
						      httpRequest.open("GET", "/EN/Server.php?q=" + Item);
						      httpRequest.send();




					function streams(){
			        if (this.readyState == 4 && this.status == 200) {

			          	var response = this.responseText;
			            console.log(response);
			            console.log(Item);
			            
						var field = response.split(':');
			            var Name = field[2];
			            var Cost = field[3];
			            var Stock = field[4];

			            H.innerHTML += Name;
					    h.innerHTML += "€"+Cost;
					    img.src = "/Img/"+Name+".Png";


					    if (Stock == "True "){
					    	P.innerHTML += "In Stock";
					    	P.style.color = "Green";
					    	Content.appendChild(btn);
					        btn.type = "Number";
                			btn.name = Item;
                			btn.id = "InputNUMBER";
                			btn.className = "InputNUMBER";
                			btn.value = "0";
                			btn.min = "0";
                			btn.max = "5"
					    } else {
					    	P.innerHTML += "Out Of Stock";
					    	P.style.color = "Red";
					    }

			               
					        
			            
			          }
			        }
				});

				

		      }
		    }
		    xmlhttp.open("GET", "/EN/Server.php?q=", true);
		    xmlhttp.send();

		    ul = document.createElement('ul');
			document.getElementById('DatabaseContent').appendChild(ul);
		   
}
