$(document).ready(function() {
	var pos = -50;
	var id = setInterval(frame, 25);

	function frame() {
	  if (pos == 200) {
		pos = -50;
	  } else {
		pos++;
		$("#scrolltext").css("left", pos + '%');
		$("#scrolltext2").css("left", (pos - 50) + '%'); // start this sentence 50% behind the first one
	  }
	}
  });