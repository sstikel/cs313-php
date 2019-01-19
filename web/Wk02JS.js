//A simple not to know that this loaded.
//end
function benignFunction() {
  getElementById("entire").innerHTML = "Maybe you can't read, but the button said 'no touch'...<br><button onclick="undo()">No Touch</button>";
}

function undo() {
 location.replace("https://warm-refuge-37557.herokuapp.com/Wk02Home.php") 
}