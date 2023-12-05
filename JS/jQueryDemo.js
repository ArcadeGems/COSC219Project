$(document).ready(function() {
    var pos = 200;
    var id = setInterval(frame, 25);

    function frame() {
      if (pos == -100) {
        pos = 200;
      } else {
        pos--;
        $("#scrolltext").css("left", pos + '%');
        $("#scrolltext2").css("left", (pos + 25) + '%'); // start this sentence 25% ahead of the first one
      }
    }
});
