/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;
//var pijl = dropdown.getElementsByTagName("i");

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var pijl = this.childNodes[1];
  pijl.classList.toggle("fa-caret-down");
  pijl.classList.toggle("fa-caret-up");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}



function myFunction() {
    var popup = document.getElementById("popupADD");
    popup.classList.toggle("hide");
}