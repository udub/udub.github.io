alert("Welcome to the chat box!");

function myFunction(){
  var textInput = document.getElementById("textbox");
  var comment = document.getElementById("comment");
  comment.innerHTML = textInput.value;
}
