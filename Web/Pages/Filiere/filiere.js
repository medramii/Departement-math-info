/*-------change the curent choosen menu item-------*/


var active = document.getElementsByClassName('active');
active[0].className = active[0].className.replace("active", "");
var flr = document.getElementById('flr');
flr.className += " active";
