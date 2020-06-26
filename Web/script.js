var
  login = document.getElementsByClassName('login_container')[0],
  contact = document.getElementsByClassName('contact_dialog')[0];

function show_dialog(diag) {
  diag.style.display = "inherit";
  document.getElementsByClassName('navbar_container')[0].style.pointerEvents="none"
}

function hide_dialog(diag) {
  diag.style.display = "none";
  document.getElementsByClassName('navbar_container')[0].style.pointerEvents="inherit"
}
/*-----------------*/

// $(document).ready(function() {
//   $(document).on("scroll", function(event) {
//     var scrollPos = $(document).scrollTop();
//     var aboutPos = $('#about').position().top;
//     if (scrollPos >= aboutPos-10) {
//       var active = document.getElementsByClassName(' active');
//       active[0].className = active[0].className.replace("active", "");
//       $('.about').addClass("active");
//     }
//     if (scrollPos < aboutPos-10) {
//       var active = document.getElementsByClassName(' active');
//       active[0].className = active[0].className.replace("active", "");
//       $('.home').addClass("active");
//     }
//   });
// }
