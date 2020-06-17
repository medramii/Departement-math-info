/*-------change the curent choosen menu item-------*/
var items = document.getElementsByClassName('nav-item');
for (var i = 0; i < items.length; i++) {
  items[i].addEventListener("click", function() {
    var active = document.getElementsByClassName(' active');
    active[0].className = active[0].className.replace("active", "");
    this.className += " active";
  })
}
/*-----------------------------------------------*/

/*----------fix the navbar after scroll----------*/
// Get the navbar
var navbar = document.getElementById("navbar");
var nav = document.getElementsByClassName("navbar-nav")[0];

// Get the offset position of the navbar
var sticky = navbar.offsetTop;

window.onscroll = function(){
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("fixed-top");
    nav.classList.remove("mx-auto");
  }
  else {
    navbar.classList.remove("fixed-top");
    nav.classList.add("mx-auto");
  }
}
/*-----------------------------------------------*/
