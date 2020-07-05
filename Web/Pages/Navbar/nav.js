/*-------change the current choosen menu item-------*/
// var items = document.getElementsByClassName('nav-item');
// for (var i = 0; i < items.length; i++) {
//   items[i].addEventListener("click", function() {
//     var active = document.getElementsByClassName(' active');
//     active[0].className = active[0].className.replace("active", "");
//     this.className += " active";
//   })
// }
/*-----------------------------------------------*/

$(document).ready(function(){
  $('.sc').click(function (e){
    var l = $(this).attr('href');
    $('html,body').animate({
      scrollTop: $(l).offset().top - 150},500)
    e.preventDefault();
  });
});

/*----------fix the navbar after scroll----------*/
// Get the navbar
var navbar = document.getElementById("navbar");
var nav = document.getElementsByClassName("parentNav")[0]; //navbar-nav
// Get the offset position of the navbar
var fixed = navbar.offsetTop;

function fixNav(){
  if (window.pageYOffset >= fixed) {
    navbar.classList.add("fixed-top");
    nav.classList.remove("mx-auto");
  }
  else {
    navbar.classList.remove("fixed-top");
    nav.classList.add("mx-auto");
  }
}
/*-----------------------------------------------*/

$(document).ready += fixNav();
window.addEventListener('scroll', fixNav);

/*----------------------------------*/

function goto(link) {
  document.getElementsByName('model')[0].setAttribute("value", link);
  document.getElementById('navForm').submit();
}
function whichFlr(link, flr) {
  document.getElementsByName('model')[0].setAttribute("value", link);
  document.getElementsByName('flrName')[0].setAttribute("value", flr);
  document.getElementById('navForm').submit();
}
