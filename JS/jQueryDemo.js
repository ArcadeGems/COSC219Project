$(document).ready(function() {
    var pos = 300;
    var id = setInterval(frame, 25);

    function frame() {
      if (pos == -300) {
        pos = 300;
      } else {
        pos--;
        $("#scrolltext").css("left", pos + '%');
        $("#scrolltext2").css("left", (pos + 25) + '%'); // start this sentence 25% ahead of the first one
      }
    }
});
