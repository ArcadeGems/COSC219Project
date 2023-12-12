$(document).ready(function() {
  var pos = 130;
  var id = setInterval(frame, 20);

  function frame() {
    if (pos == -65) {
      pos = 130;
    } else {
      pos--;
      $(".scrolltext").css("left", pos + '%'); // use the class selector instead of the id selector
    }
  }
});
