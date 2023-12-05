$(document).ready(function() {
    var pos = 200;
    var id = setInterval(frame, 25);

    function frame() {
      if (pos == -50) {
        pos = 200;
      } else {
        pos--;
        $("#scrolltext").css("left", pos + '%');
        $("#scrolltext2").css("left", (pos + 50) + '%'); // start this sentence 50% ahead of the first one
      }
    }
});