/*------ reduce the home url if it contains the about hash -------*/
let stateObj = { id: "100" };
window.history.pushState(stateObj, "home", "http://localhost/Departement-math-info/Web/");

/*------ set the active menu item to Home -------*/
document.getElementById('lAbout').setAttribute('href', '#about');

document.getElementById('iHome').classList.add("active");


var
  iHome = document.getElementById('iHome'),
  iAbout = document.getElementById('iAbout'),
  aboutSection = document.getElementById('about'),
  offset = aboutSection.offsetTop - 250;

function  homeOrAbout(){
  if (window.pageYOffset >= offset && !iAbout.classList.contains('active')) {
    iHome.classList.remove("active");
    iAbout.classList.add("active");
  }
  else if (window.pageYOffset < offset && !iHome.classList.contains('active')) {
    iAbout.classList.remove("active");
    iHome.classList.add("active");
  }
}

window.addEventListener('scroll', homeOrAbout);
