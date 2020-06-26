var
  tag = document.getElementsByClassName('tag'),
  act = document.getElementsByClassName('act_item');

for (var i = 0; i < 7; i++) {
  var
    wTag = parseInt(getComputedStyle(tag[i]).width),
    wAct = parseInt(getComputedStyle(act[i]).width),
    left = (100 - (wTag * 100 / wAct)) / 2;
  tag[i].style.left = "" + left + "%";
}
