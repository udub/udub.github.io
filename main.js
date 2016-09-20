

function myFunction(){
  var textInput = document.getElementById("textbox");
  var comment = document.getElementById("comment");
  var chatResult = "b3njamm1n >" + textInput.value;
  comment.innerHTML = chatResult;
  document.getElementById("video").currentTime = 14;
}
