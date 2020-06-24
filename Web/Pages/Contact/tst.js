count();
function count() {
    document.getElementById('iVar').textContent = document.getElementById('txt').textLength;
    if (document.getElementById('txt').textLength == 500) {
      document.getElementById('iVar').style.color = "red";
    }
    else {
      document.getElementById('iVar').style.color = "inherit";
    }
}
