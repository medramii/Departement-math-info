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
